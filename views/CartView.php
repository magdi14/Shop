<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <span class="navbar-text">
    Shopping Cart
    </span>
</nav>
<?php
require_once ("./public/cartCotroller.php");
if(!isset($_SESSION['cartItems']))
{
    $_SESSION['cartItems'] = array();
}
cartCotroller::addProductToCart();

?>
<div class = "container">
   <div class="row">
       <div class="col-lg-11">
           <h2 style="text-align: center">Welcome</h2>
       </div>
   </div>
    <div class="row">
        <div class="col-lg-11">
            <table class="table">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>

                </thead>
                <tbody>

                    <?php
                    foreach ($_SESSION["cartItems"] as $key=>$v)
                    {
                        ?>
                    <tr>
                        <td><?php echo $_SESSION["cartItems"][$key]->name ?></td>
                        <td><?php echo $_SESSION["cartItems"][$key]->price ?>$</td>
                        <td><?php echo $_POST["quantity"] ?></td>
                        <td><?php echo $_POST["quantity"] * $_SESSION["cartItems"][$key]->price ?>$</td>
                    </tr>
                        <?php
                    }
                        ?>
                </tbody>
            </table>
        </div>
    </div>


</div>