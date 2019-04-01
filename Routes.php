<?php
Routes::set("index", function (){


    cartCotroller::viewCart();
    productController::viewProduct();
    cartCotroller::addProductToCart();
});

?>
