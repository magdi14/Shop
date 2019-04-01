<?php

require_once 'DBController.php';
class productController
{
    function getAllProducts()
    {
        $conn = new DBController();
        $conn->connectDB();
        $q = 'SELECT * from product';
        $products = array();
        $products = $conn->runQuery($q);
       // echo count($products);
//        foreach ($products as $key => $value)
//            echo "\t\tID: $value->id\t\t; Name: $value->name\t\t; Price: $value->price$\t\t";
        return $products;
    }
    function viewProduct()
    {
        require_once ("./views/productsView.php");
    }
}
