<?php
require 'includes/_header.php';
include "includes/config.php";
require 'includes/head.php';

?>

<body>
<div class="contnt">
   <!-- start head-->
 <div class="head">
                    
    <div class="container">
        <div class="nav">
             <div class="home">
                    <a href="#"><img class="animated wow backInLeft" id="im1" src="img/food.png" style="cursor: pointer;"></a>
                        <ul>
                            <a href="carte.php" ><li id="li1"><?= $lang['navCart'] ?></li></a>
                            <a href="Reservation.php" ><li id="li2"><?= $lang['reservation'] ?></li></a>
                             <a href="commande.php" > <li id="li3"><?= $lang['commande'] ?></li></a>
                        </ul>
                                                        
             </div>
             <div id="languageContainer" class="lgp">
                <div id="arabic" ><img class="animated wow pulse"  src="img/icon/maroc.jpg" style="width: 51px;height: 50px;"></div>
                <div id="english"><img class="animated wow pulse" data-wow-delay=".3s" src="img/icon/english.png"></div>
                <div id="french" ><img class="animated wow pulse" data-wow-delay=".5s" src="img/icon/french.png" ></div>
                <div id="chinese" ><img class="animated wow pulse" data-wow-delay=".7s" src="img/icon/chinese.png"></div>
                <div id="russian" ><img class="animated wow pulse" data-wow-delay="1s" src="img/icon/russian.png"></div>
              </div>  
              <button class="Navbar__MenuButton-sc-81u832-14 eVfhOg" style="display:none;">
                  <svg id="start" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></button>

        </div>
     </div>

</div>
    <!--end head-->

   <!--start contnt-->
   <div class="menu_t" style="display:none;">
   <i class="far fa-times-circle"></i>
       <ul class="menul">
            <a href="carte.php" ><li id="li1"><?= $lang['navCart'] ?></li></a>
            <a href="Reservation.php" ><li id="li2"><?= $lang['reservation'] ?></li></a>
            <a href="commande.php" > <li id="li3"><?= $lang['commande'] ?></li></a>
        </ul>

   </div>
        <div class="cnt">
                <svg height="500" width="450" style="float: right; margin-top: -35px;">
                    <path stroke="#000" stroke-width="5" >
                    </path>
                </svg>
                <a href="panier.php"> <i class="fas fa-shopping-basket indbasket animated wow bounce " style="margin-top: 125px; color: #ffffffeb;" ></i></a>
        <div class="media">
            <div class="lin3 "></div>
        <div class="order "> <a href="commande.php"><?php echo $lang['order']?></a></div>
            <div class="lin2 animated"></div>
        </div>
        <div class="artist">

            <h2 class="animated wow fadeInTopLeft" data-wow-delay=".3s"><?php echo $lang['bienvenue']?></h2>
            <h1 class="animated wow fadeInBottomRight" data-wow-duration="2s" data-wow-delay=".5s"><?php echo $lang['Delicieuse']?></h1>
            <h2 style="width: 195px;" class="animated wow fadeInTopLeft" data-wow-delay=".3s"> <?php echo $lang['indexTitle']?></h2>
            <p class="animated wow fadeInBottomRight" data-wow-duration="2s" data-wow-delay=".5s"><?php echo $lang['indexParagraphe']?></p>
        </div>
        <div class="im">
            <img class="animated wow zoomIn" data-wow-delay=".5s" src="img/to.png" style="position: absolute;top: 378px;right: 20px;">
<span>
   <ul>
        <li class="colors" id="blue" data-color="#f3c213"></li>
        <li class="colors" id="red" data-color="#be4426"></li>
        <li class="colors" id="autre" data-color="#be4426"></li>
        <li class="colors" id="purple" data-color="#e7a74b"></li>
        <li class="colors" id="yellow" data-color="#7c943a"></li>
        <li class="colors" id="orage" data-color="#e2cc98"></li>
        <li class="colors" id="green" data-color="#8c5527"></li>
        <li class="colors" id="noir" data-color="#000"></li>
   </ul>
</span>

        </div>
        </div>
  <!--end contnt-->
<script src="javaScript/javaScript.js"></script>
<script src="javaScript/language.js"></script>
<script src="javaScript/jsfile.js"></script>

<!-- jquery cdj min -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- wow animation --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script >
// wow animat 

  new WOW().init();

</script>
</div>
</body>
</html>