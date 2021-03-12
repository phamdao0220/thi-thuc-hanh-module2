<?php

namespace App\model;

use PDO;

class itemsModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM Items";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function addItems($items_id, $items_name, $item, $price, $amount,$date_created,$item_description)
    {
        $sql = 'INSERT INTO Items (`items_id`,`items_name`,`item`,`price`,`amount`,`date_created`,`item_description`)
                VALUES(:items_id,:items_name,:item,:price,:amount,:date_created,:item_description)';

        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":items_id", $items_id);
        $stmt->bindParam(":items_name", $items_name);
        $stmt->bindParam(":item", $item);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":amount", $amount);
        $stmt->bindParam(":date_created", $date_created);
        $stmt->bindParam(":item_description", $item_description);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}
