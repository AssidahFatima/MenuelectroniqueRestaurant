<?php
require 'includes/_header.php';
include "includes/config.php";
require 'includes/head.php';
?>
<div id="page4" class="page4 ">

    <div class="head">
        <div class="container">
        <div class="nav">
             <div class="home">
                    <a href="index.php"><img id="im4" src="img/food.png" style="cursor: pointer;"></a>
                    <ul>
                        <a href="carte.php" ><li id="li1"><?= $lang['navCart'] ?></li></a>
                        <a href="Reservation.php" ><li id="li2"><?= $lang['reservation'] ?></li></a>
                        <a href="commande.php" > <li id="li3"><?= $lang['commande'] ?></li></a>
                    </ul>
             </div>
        
            <div class="lange">
            <div id="languageContainer" class="lgc" style="position:relative;">
                    <div id="arabic" ><img class="animated wow pulse" src="img/icon/maroc.jpg" style="width: 51px;height: 50px;"></div>
                    <div id="english"><img class="animated wow pulse" data-wow-delay=".3s" src="img/icon/english.png"></div>
                    <div id="french" ><img class="animated wow pulse" data-wow-delay=".5s" src="img/icon/french.png" ></div>
                    <div id="chinese" ><img class="animated wow pulse" data-wow-delay=".7s" src="img/icon/chinese.png"></div>
                    <div id="russian" ><img class="animated wow pulse" data-wow-delay="1s" src="img/icon/russian.png"></div>
            </div>  
            </div>
            <button class="Navbar__MenuButton-sc-81u832-14 eVfhOg" style="display:none;">
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
<div class="menu">

    <ul>
        <li id="l1"><i class="fas fa-drumstick-bite icc "></i><?= $lang['Viande'] ?></li>
        <li id="l2" style="border-top-left-radius: 0px;border-top-right-radius: 14px;border-bottom-right-radius: 14px;border-bottom-left-radius: 14px;"><i class="fas fa-fish icc "></i><?= $lang['Poisson'] ?></li>
        <li id="l3" style="border-top-left-radius: 14px; border-top-right-radius: 0px; border-bottom-right-radius: 14px; border-bottom-left-radius: 14px;"><i class="fas fa-cocktail icc "></i><?= $lang['Boissons'] ?></li>
        <li id="l4"><i class="fas fa-apple-alt icc "></i><?= $lang['Fruits'] ?></li>
    </ul>
    <img  class="lin" src="img/icon/Menu-Divider-2.png">
<a href="panier.php">
<i class="fas fa-shopping-basket baskom animated wow shakeX"></i>
</a>

<div class="repa r1 intro " style="display: none;">
        <div class="lin1" style="display: inline-block;">


<?php $products = $DB->query('SELECT * FROM products'); ?>
<?php foreach ( $products as $products): ?>



        <div class="rep1">
            <div class="par1">
                <img class="imr" src="img/repas/Viandes/<?= $products->id; ?>.jpg">
                <div class="infos"> 
                  <div class="title1"> <span > <?= $products->nom; ?></span></div>
                    <p><?= $lang['cmdd'] ?></p>
                    <span><?= number_format($products->price,2,',',' '); ?> <?= $lang['dh'] ?></span>
                    
                            
                            <a class="addPanier" href="includes/addpanier.php?id=<?= $products->id; ?>" id="addc" ><i class="fas fa-cart-plus" style="color:#fff;"></i><?= $lang['Ajouter'] ?></a>
                       
                        <div  class="fort" style="display: none;">
                            <i class="fas fa-window-close clos"></i>
                           </div>

                </div>
            </div>
        </div>
<?php endforeach ?>

 </div>

</div>
<div class="repa r2  " style="display: none;">
        <div class="lin1" style="display: inline-block;">


<?php $poisson = $DB->query('SELECT * FROM poisson'); ?>
<?php foreach ( $poisson as $poisson): ?>
        <div class="rep1">
            <div class="par1">
                <img class="imr" src="img/repas/poisson/<?= $poisson->id; ?>.jpg">
                <div class="infos"> 
                <div class="title1"> <span><?= $poisson->nom; ?></span></div>
                <p><?= $lang['cmdd'] ?></p>
                <span><?= number_format($poisson->price,2,',',' '); ?></span>
                <a class="addPanier" href="includes/addpanierp.php?id=<?= $poisson->id; ?>" id="addc"><i class="fas fa-cart-plus" style="color:#fff;"></i><?= $lang['Ajouter'] ?></a>
                <div  class="fort" style="display: none;">
                <i class="fas fa-window-close clos"></i>
                </div>
                </div>
            </div>
        </div>
<?php endforeach ?>

</div>
</div>

<div class="repa r3 " style="display: none;">
    <div class="lin1" style="display: inline-block;">
<?php $boissons = $DB->query('SELECT * FROM boissons'); ?>
<?php foreach ( $boissons as $boissons): ?>
    <div class="rep1">
        <div class="par1">
        <img class="imr" src="img/repas/boissons/<?= $boissons->id; ?>.jpg">
        <div class="infos"> 
        <div class="title1"> <span><?= $boissons->nom; ?></span></div>
        <p><?= $lang['cmdd'] ?></p>
        <span><?= number_format($boissons->price,2,',',' '); ?></span>
        <a class="addPanier" href="includes/addpanierb.php?id=<?= $boissons->id; ?>" id="addc"><i class="fas fa-cart-plus" style="color:#fff;"></i><?= $lang['Ajouter'] ?></a>
        <div  class="fort" style="display: none;">
        <i class="fas fa-window-close clos"></i>
        </div>
        </div>
    </div>
</div>
<?php endforeach ?>

 </div>

</div>
<div class="repa r4 " style="display: none;">
        <div class="lin1" style="display: inline-block;">


<?php $Fruits = $DB->query('SELECT * FROM Fruits'); ?>
<?php foreach ( $Fruits as $Fruits): ?>
        <div class="rep1">
            <div class="par1">
            <img class="imr" src="img/repas/Fruits/<?= $Fruits->id; ?>.jpg">
            <div class="infos"> 
            <div class="title1"> <span><?= $Fruits->nom; ?></span></div>
            <p><?= $lang['cmdd'] ?></p>
            <span><?= number_format($Fruits->price,2,',',' '); ?></span>
            <a class="addPanier" href="includes/addpanierf.php?id=<?= $Fruits->id; ?>" id="addc"><i class="fas fa-cart-plus" style="color:#fff;"></i><?= $lang['Ajouter'] ?></a>
            
            <div  class="fort" style="display: none;">
            <i class="fas fa-window-close clos"></i>
            </div>
            </div> 
        </div>
</div>
<?php endforeach ?>

</div>
</div>
<script src="javaScript/javaScript.js"></script>
<script src="javaScript/language.js"></script>
<!-- jquery cdj min -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- wow animation --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"> </script>
<script type="text/javascript" src="javaScript/appi.js"> </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script >
// wow animat 

  new WOW().init();

</script>
</html>
