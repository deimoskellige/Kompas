<?php 
require '_header.php';
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 

    
    <link rel="stylesheet"   href="css\shared.css" type="text/css"/>
    <link rel="stylesheet"   href="css\trips-shared.css" type="text/css"/>

    <link rel="stylesheet" href="css/Africa.css" />

</head>

<body>
    <div class="panier"><a href="carte.php"><img src="images/avion.png"></a></div>
    <div class="logout"><a href="logout.php"><img src="images/logout.png"></a></div>

    <header data-aos="fade-in">
        <div data-aos="fade-right" class="Kompas">KOMPAS</div>



        <nav class="header-nav">

            <div class="mobile-icone"><a href="#" class="a_icone"><img src="images/icone.png" /> </a>
            
            <div class="mobile-nav">

                
                <ul class="mobile-ul">
                    <li><a href="kompas.html">Home</a></li>
                    
                    <li><a href="about.html">About</a></li>
                    <li>Trips
                        <ul>
                            <li><a href="Africa.php">Africa</a></li>
                            <li> <a href="America.php">America</a></li>
                            <li> <a href="Asia.php">Asia</a></li>
                        </ul>



                    </li>
                </ul>
            </div>
            </div>

            
            

            <ul class="header-ul">
                <li data-aos="fade-left"><a href="kompas.html" class="home">Home </a></li>
                <li data-aos="fade-left"><a href="about.html">About</a></li>
                <li data-aos="fade-left" class="Trips"><a href="#">Trips</a>
                    <div class="trips-menu">
                        <ul class="ul-trips">
                            <li class="trip-africa"><a href="Africa.php">Africa</a></li>
                            <li class="trip-america"><a href="America.php">America</a></li>
                            <li class="trip-asia"><a href="Asia.php">Asia</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </nav>



    </header>

    <main>



        <div class="first">

            <div  class="AFRICA continant">
                <p>AFRICA </p>
            </div>

            <div class="citation">
                <p data-aos="fade-left" class="phrase">“If I have ever seen magic, it has been in Africa.” </p>
                <p data-aos="fade-right" class="auteur">John Hemingway </p>
            </div>


        </div>


        <!-----------------------------FIRST TRAVEL----------------------------------- -->
        <div class="second">
        <?php  $products = $DB->query('SELECT DISTINCT * FROM products WHERE continant IN ("Africa")'); ?>
       
        <?php 
             foreach ($products as $product) { ?>

            <div data-aos="fade-down" class=" Nom-pays">
                <p><?=  $product->Name_pays; ?></p>
            </div>

            <div class=" Pays-plan">

                <div data-aos="fade-right" class=" Pays-pic left"> 
                <img src="images/<?=  $product->Name_pays; ?>.jpg" />
                <div class="price"><?= $product->price; ?> $ </div>

                </div>

                <div data-aos="fade-left" class="details">

                    <p class="destination " class="Pays-destination"><?=  $product->name; ?></p>

                    <div >
                        <p class="duration" class="Pays-duration">Duration: <?=  $product->duration; ?></p> <br>

                        <div class="svg-date">
                            <p class="date"><?=  $product->date; ?></p>
                  
                        </div>

                    </div>

                    <a class="cart addPanier" href="addpanier.php?id=<?= $product->id; ?>">Reserve</a>

                </div>
            </div>

            <div data-aos="fade-in" class="Pays-text">
            <?=  $product->description; ?>

            </div>
            <?php  } ?>

        </div>
  



        




    </main>

    <footer data-aos="fade-up" class="footer">

        <div class="contact">“Contact us</div>

        <div class="social">
            <a href="https://twitter.com/?lang=fr" target="_blank">twitter.com</a>
            <a href="https://facebook.com" target="_blank">facebook.com</a>
           
            <a href="https://www.instagram.com" target="_blank">instagram.com</a>
        </div>

        <div class="copyright">Copyright © 2020 Kompas Company S.L. All rights reserved.</div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 900
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>      
      <script src="main.js"></script>
</body>

</html>