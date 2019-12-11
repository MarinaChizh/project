<?php

namespace App\Controller;

class CarsController extends AbstractTableController
{
    protected $tableName = 'cars';
    protected $viewPatternsPath = 'templates/table/';
    protected $pageSize = 4;
    protected $addButton = true;
    protected $a = true;


    protected function showPrepare() {
        $this->addButton = $_SESSION['user']['cod'] == 'adm' ? true : false;
        $this->editDeleteButton = $_SESSION['user']['cod'] == 'adm' ? true : false;
    }
    
}