<?php 
require '_header.php';
$json= array('error' => true);

if(isset($_GET['id'])){
   $product = $DB->query('SELECT id FROM products WHERE id=:id' , array('id' => $_GET['id']));
    if(empty($product)){
        $json['message'] ="ce produit existe pas";


    }
    $panier->add($product[0]->id);
    $json['error'] =false;


    $json['message'] ="Le produit a bienété ajouté a votre panier";
}else {

    $json['message'] = "vous navez pas selectioné de produit a ajouter au panier ";
}
 echo json_encode($json);






?>