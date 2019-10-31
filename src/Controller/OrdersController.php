<?php

namespace App\Controller;

use App\Model\OrdersModel;
use TexLab\MyDB\DB;
use App\Core\Conf;
use TexLab\MyDB\DbEntity;

class OrdersController extends AbstractTableController
{
    protected $tableName = 'orders';
    protected $viewPatternsPath = 'templates/table/';
    protected $pageSize = 3;
    
    public function __construct()
    {
        parent::__construct();
        $this->table = new OrdersModel($this->tableName, DB::Link(Conf::MYSQL));
    }

    public function actionShowEditForm()
    {
        $tableCars = new DbEntity('cars', DB::Link(Conf::MYSQL));

        $this->view->setPatternsPath('templates/ordersTable/');

        $this->render("ShowAddEditForm", [
            'columnsNames' => $this->table->getColumnsNames(),
            'editValues' => $this->table->get(['id' => $_GET['id']])[0],
            'URL' => '?t=' . $this->shortClassName() . '&a=Edit&id=' . $_GET['id'],
            'cars' => $tableCars->getColumn('description'),
            'tableHeaders' => $this->table->getColumnsComments()
        ]);
    }



    public function actionShowAddForm()
    {
        $tableCars = new DbEntity('cars', DB::Link(Conf::MYSQL));

        $this->view->setPatternsPath('templates/ordersTable/');
        
        $this->render("ShowAddEditForm", [
            'columnsNames' => $this->table->getColumnsNames(),
            'URL' => '?t=' . $this->shortClassName() . '&a=Add',
            'cars' => $tableCars->getColumn('description'),
            'tableHeaders' => $this->table->getColumnsComments()
        ]);
    }


}