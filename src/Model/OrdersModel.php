<?php

namespace App\Model;

use TexLab\MyDB\DbEntity;

class OrdersModel extends DbEntity
{

    public function getPage(?int $page = null): array
    {
        $this
        ->reset()
        ->setSelect("`orders`.`id`, `orders`.`name`, `orders`.`unp`, `orders`.`route `, `orders`.`volume`, `orders`.`download date`, `orders`.`date of discharge`, `orders`.`price`  AS 'cars_id'")
        ->setFrom("`cars`, `orders`")
        ->setWhere("`cars`.`id` = `orders`.`cars_id`")
        ->setOrderBy("`orders`.`id`");
        return parent::getPage($page);
    }


}