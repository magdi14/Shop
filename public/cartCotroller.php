<?php

require_once("./models/product.php");
require_once("DBController.php");


class cartCotroller extends cart
{

       function __construct()
       {
       }
       function addProductToCart()
       {

           $db_handle = new DBController();
           if(!isset($_SESSION['cartItems']))
           {
               $_SESSION['cartItems'] = array();
           }
           if(!empty($_POST["quantity"]))
           {
               $productByID = $db_handle->runQuery("SElECT * from product where id = '" . $_GET["id"] . "'");
//             echo $productByID[0]->name.$productByID[0]->price.$_POST["quantity"];
               if(!empty($_SESSION['cartItems']))
               {
                   if(in_array($productByID[0]->id, array_keys($_SESSION['cartItems'])))
                   {
                       foreach ($_SESSION['cartItems'] as $k => $v)
                       {
                           if($productByID[0]->id == $k)
                           {
                               $_SESSION['cartItems'][$k]["quantity"] += $_POST['quantity'];
                           }
                       }
                   }
               }
               else
                    $_SESSION['cartItems'] = array_merge($_SESSION['cartItems'], $productByID);

           }


       }
       function viewCart()
       {
           require_once ("./views/CartView.php");
       }
}