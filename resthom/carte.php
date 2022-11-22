<?php
require 'includes/_header.php';
require 'includes/head.php';
include "includes/config.php"
?>
<div id="page2" class="page2 ">
    <div class="head">
        <div class="container">
        <div class="nav">
            <div class="home">
            <a href="index.php"> <img id="im2" src="img/food.png" style="cursor: pointer;"></a>
            <ul>
                 <a href="carte.php" ><li id="li1"><?= $lang['navCart'] ?></li></a>
                 <a href="Reservation.php" ><li id="li2"><?= $lang['reservation'] ?></li></a>
                 <a href="commande.php" > <li id="li3"><?= $lang['commande'] ?></li></a>
             </ul>
        </div>
        
            <div class="lange lngcart">
            <div id="languageContainer" class="languageContainercarte" style="position:relative;">
                    <div id="arabic"  ><img class="animated wow pulse" src="img/icon/maroc.jpg" style="width: 51px;height: 50px;"></div>
                    <div id="english"><img class="animated wow pulse" data-wow-delay=".3s" src="img/icon/english.png"></div>
                    <div id="french" ><img class="animated wow pulse" data-wow-delay=".5s" src="img/icon/french.png" ></div>
                    <div id="chinese" ><img class="animated wow pulse" data-wow-delay=".7s"  src="img/icon/chinese.png"></div>
                    <div id="russian" ><img class="animated wow pulse" data-wow-delay="1s" src="img/icon/russian.png"></div>
             </div>  
            </div>
            <button class="Navbar__MenuButton-sc-81u832-14 eVfhOg eV2" style="display:none;">
                  <svg id="start" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></button>
        </div>
        <div class="menu_t" style="display:none;">
        <i class="far fa-times-circle"></i>
       <ul class="menul">
            <a href="carte.php" ><li id="li1"><?= $lang['navCart'] ?></li></a>
            <a href="Reservation.php" ><li id="li2"><?= $lang['reservation'] ?></li></a>
            <a href="commande.php" > <li id="li3"><?= $lang['commande'] ?></li></a>
        </ul>
            </div>
        </div>
        
        </div>  
        <div class="care">
            <div id="arti12" class="article arti12"> 
            <div class="premier start" style="margin-top: 11px;
       ">
            <div class="art1" style="margin-left: 20px;"> <img src="img/repas/6034667879_bffdfdf352_o-1024x683.jpg" style="width: 100%; height: 100%;"> <div class="prix"> <i class="fas fa-caret-up" ></i><span class="deca">120 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span class="info">Saumon frais</span></div>  </div>
            <div class="art1"> <img src="img/repas/IMG_4206-1-1024x683.jpg" style="width: 100%; height: 100%;" > <div class="prix"> <i class="fas fa-caret-up" ></i><span class="deca">90 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span class="info">Crème de poisson</span></div> </div>
            <div class="art1"> <img src="img/repas/o.jpg" style="width: 100%; height: 100%;">  <div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">60 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><span class="info">Tranches de bite</span></div>  </div>
            <div class="art1"> <img src="img/repas/OIP (1).jpg" style="width: 100%; height: 100%;"> <div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">73 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><span class="info">côtelettes</span></div> </div>
            <div class="art1"> <img src="img/repas/OIP (2).jpg" style="width: 100%; height: 100%;"><div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">44 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><span class="info">Poulet au four</span></div>  </div>
            <div class="art1" style="margin-left: 20px;"> <img src="img/repas/OIP.jpg" style="width: 100%; height: 100%;"> <div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">200 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span class="info">du boeuf</span></div> </div>
            <div class="art1"> <img src="img/repas/Rc029b4b19896641174b1f82c2d63615b.jpg" style="width: 100%; height: 100%;"><div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">140 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span class="info">Délicieux poisson</span></div> </div>
            <div class="art1"> <img src="img/repas/Rfb4a290fa341ca014ec8a49630445d7c.jpg" style="width: 100%; height: 100%;"> <div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">124 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span class="info">Salade de viande</span></div></div>
            <div class="art1"> <img src="img/repas/tawilis.jpg" style="width: 100%; height: 100%;"><div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">300 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span class="info">Calamars</span></div> </div>
            <div class="art1"> <img src="img/repas/Easy-Thai-Chicken-Skewers-3-lands.jpg" style="width: 100%; height: 100%;"> <div class="prix"><i class="fas fa-caret-up" ></i><span class="deca">70 DH</span>  <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><span class="info">Marcher la viande</span></div></div>
    
        </div>

        
        </div>
        </div>
</div>
<script src="javaScript/javaScript.js"></script>
<script src="javaScript/language.js"></script>
<!-- jquery cdj min -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- wow animation --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script >
// wow animat 

  new WOW().init();

</script>