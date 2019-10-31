<?php

namespace App\Controller;

class CarsController extends AbstractTableController
{
    protected $tableName = 'cars';
    protected $viewPatternsPath = 'templates/table/';
    protected $pageSize = 4;
}