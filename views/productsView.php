<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<?php
require_once './public/productController.php';
require_once ("./public/cartCotroller.php");

$p = new productController();
$products = $p->getAllProducts();
?>
<div class = "container">
    <div class="row">
<?php

foreach($products as $key=> $value)
    {?>
        <div class="col-sm-3">
            <form method="post" action="index?action=add&id=<?php echo $products[$key]->id;?>">
                <div class="card" style="width: 14rem;">

                    <div class="card-body">
                        <h4 class="card-title"><?php echo $products[$key]->name?></h4>
                        <h5 class="card-title"><?php echo $products[$key]->price?>$</h5>
                        <div>
                            <input type="text" class="product-quantity" name="quantity" value="1" size="3"/> <input type="submit" action="addProductToCart()" value="Add to Cart" class="btn btn-primary" />
                        </div>

                    </div>
                </div>
            </form>
        </div>


    <?php
    }
    ?>
    </div>

</div>


