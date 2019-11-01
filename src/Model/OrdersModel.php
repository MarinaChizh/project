<?php

namespace App\Model;

use TexLab\MyDB\DbEntity;

class OrdersModel extends DbEntity
{

    public function getPage(?int $page = null): array
    {
        $this
        ->reset()
        ->setSelect("`orders`.`id`, `orders`.`name`, `orders`.`unp`, `orders`.`route`, `orders`.`volume`, `orders`.`download_date`, 
        `orders`.`date_of_discharge`, `orders`.`price`, `cars`.`number` AS `cars_id`")
        ->setFrom("`cars`, `orders`")
        ->setWhere("`cars`.`id` = `orders`.`cars_id`")
        ->setOrderBy("`orders`.`id`");
        return parent::getPage($page);
    }


}

