<?php 
require '_header.php';
?>

<?php if(isset($_GET['del'])){
    $panier->del($_GET['del']);
}

?>


<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="cart.css" />
        <link rel="stylesheet" href="add-cart.css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    </head>
    <body>
        <a class="show_cart" href="cart.php">Cart</a>
        <span>YOUR CART</span>
        <div class="container">
            
            <?php 
           $ids = array_keys($_SESSION['panier']);
           if(empty($ids)){
               $products = array();
           }else {
               $products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',', $ids).')');
                
           }
           
           

           foreach ($products as $product) {
                  ?>

            <div class="product_description">
                <div class="product_picture"><img src="<?=  $product->id; ?>.jpg" /></div>
                <div class="product_name"><?=  $product->name; ?></div>
                <div class="product_price"><?=  $product->price; ?>$</div>
                <a href="panier.php?del=<?= $product->id; ?>" class="add_cart_button">DELETE</a>
            </div>
           
          
           
           <?php }?>
         
           
       
        </div>
        <div class="container-total">
            <div class="total">TOTAL:<?= $panier->total(); ?> $</div>
        </div>

    </body>
</html>