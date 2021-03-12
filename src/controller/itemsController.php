<?php

namespace App\controller;

use App\model\itemsModel;

class itemsController
{
    protected $ItemsModel;

    public function __construct()
    {
        $this->ItemsModel = new itemsModel();
    }

    public function show()
    {
        $items = $this->ItemsModel->getAll();
        include 'src/view/items.php';
    }

    public function addItems()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $items = $this->ItemsModel->getAll();
            include "src/view/add.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $items_id = $_POST['items_id'];
            $items_name = $_POST['items_name'];
            $item = $_POST['item'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $date_created = $_POST['date_created'];
            $item_description = $_POST['item_description'];
            $result = $this->ItemsModel->addItems(
                $items_id,
                $items_name,
                $item,
                $price,
                $amount,
                $date_created,
                $item_description
            );
        }
    }

    private function redirectToList()
    {

        $items = $this->ItemsModel->getAll();
        header("location:index.php?page=items");

    }

    public function deleteItems()
    {
        $id = $_REQUEST['id'];
        $this->ItemsModel->deleteItems($id);
        $this->redirectToList();
    }

}
