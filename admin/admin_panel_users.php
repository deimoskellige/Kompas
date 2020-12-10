
<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=kompas;charset=utf8','root', '');


if(isset($_GET['supprime']) AND !empty($_GET['supprime'])){
    $supprime = (int) $_GET['supprime'];

    $req = $bdd->prepare('DELETE FROM users WHERE id= ?');
    $req->execute(array($supprime));
}
$membres = $bdd->query('SELECT * FROM users ORDER BY id');



?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="admin_panel.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rochester&display=swap" rel="stylesheet">


</head>

<body>
  
    <div class="container">

    

        <div class="left">
            <div class="left-top">
                <div class="dashboard">
                    <p>Dashboard</p>
                </div>
                <div class="products"><a href="admin_panel.php">Products</a></div>
                <div class="users"><a href="admin_panel_users.php">Users</a></div>

            </div>
            <div class="logout"><a href="logout.php">Logout</a></div>


        </div>
        <div class="right">
            <div class="h1_products">
                <p>Users</p>
            </div>

            <div class="product_list">

            
           
             
             <?php while($m = $membres->fetch()) { ?>
                 

                <div class="admin_product_description admin_users">

                        
                    
                        <div class="admin_product_name"><?=  $m['username'] ?></div>
                            
                        <div class="admin_product_price"><?=  $m['email'] ?></div>    
                        <div style="padding:0 2rem" class="admin_product_price"><?=  $m['password'] ?></div>   
                        
                        <div ><a class="admin_delete" href="admin_panel_users.php?supprime=<?= $m['id'] ?>">Delete</a></div>
                        
                </div>
                
                 <?php  } ?>
                </div>



               

            
           
             


             
                

                <div><button class="add_button"><a style="color:white;" href="add-users.php">Add</a></button></div>
        </div>

    </div>

    

</body>

</html>