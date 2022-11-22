<?php
require 'includes/_header.php';
include "includes/config.php";
require 'includes/head.php';
?>
<div id="page3" class="page3">
              <!--start header-->
    <div class="head">
        <div class="container">
                <div class="nav">
                    <div class="home">
                        <a href="index.php"><img id="im3" src="img/food.png" style="cursor: pointer;"></a>
                        <ul>
                            <a href="carte.php" ><li id="li1"><?= $lang['navCart'] ?></li></a>
                            <a href="Reservation.php" ><li id="li2"><?= $lang['reservation'] ?></li></a>
                            <a href="commande.php" > <li id="li3"><?= $lang['commande'] ?></li></a>
                        </ul>
                    </div>
                                    
                    <div class="lange">
                    <div id="languageContainer" class="lgr" style="position:relative;">
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
           <a href="panierR.php"><i class="fas fa-shopping-basket basket "></i></a>
            <div class="care">
               

            <!--End header-->
            
            <!--start article-->

                <div id="arti13 " class="article R1 intro" style="display:none;"> 
                        <div class="premier res res0">
                            <?php $tables = $DB->query('SELECT * FROM tables WHERE id <= 20 '); ?>
                            <?php foreach ( $tables as $tables): ?>
                                <div class="art1" style="margin-left: 20px;"> 
                                    <img src="img/table/<?= $tables->id; ?>.jpg" style="width: 100%; height: 100%;"> 
                                    <span class="st"></span> <span class="sttt"> <?= $lang['Reserve maintenant'] ?></span> 
                                    <span class="stt"></span> 
                                    <a class="addPanierR" href="includes/addpanierR.php?id=<?= $tables->id; ?>" id="add"><i class="fas fa-cart-plus" style="color:#fff;"></i><?= $lang['add'] ?></a>
                                </div>

                            <?php endforeach ?>
                        </div>
                    
                        
                </div>
                <div id="arti13" class="article R2" style="display:none;"> 
                        <div class="premier res res0">
                            <?php $tables = $DB->query('SELECT * FROM tables WHERE id > 8 AND id <= 16 '); ?>
                            <?php foreach ( $tables as $tables): ?>
                                <div class="art1" style="margin-left: 20px;"> 
                                    <img src="img/table/<?= $tables->id; ?>.jpg" style="width: 100%; height: 100%;"> 
                                    <span class="st"></span> <span class="sttt"> <?= $lang['Reserve maintenant'] ?></span> 
                                    <span class="stt"></span> 
                                    <a class="addPanierR" href="includes/addpanierR.php?id=<?= $tables->id; ?>" id="add"><?= $lang['add'] ?></a>
                                </div>

                            <?php endforeach ?>
                        </div>
                        <div class="np">
                        <span id="premier">1</span>
                        <span id="deuxieme">2</span>
                        <span id="troisieme">3</span>
                        <span id="quatreiem">4</span>                           
                        </div>
                    
                        
                </div>
                <div id="arti13 " class="article R3" style="display:none;"> 
                        <div class="premier res res0">
                            <?php $tables = $DB->query('SELECT * FROM tables WHERE id > 16 AND id <= 24 '); ?>
                            <?php foreach ( $tables as $tables): ?>
                                <div class="art1" style="margin-left: 20px;"> 
                                    <img src="img/table/<?= $tables->id; ?>.jpg" style="width: 100%; height: 100%;"> 
                                    <span class="st"></span> <span class="sttt"> <?= $lang['Reserve maintenant'] ?></span> 
                                    <span class="stt"></span> 
                                    <a class="addPanierR" href="includes/addpanierR.php?id=<?= $tables->id; ?>" id="add"><?= $lang['add'] ?></a>
                                </div>

                            <?php endforeach ?>
                        </div>
                        <div class="np">
                        <span id="premier3">1</span>
                        <span id="deuxieme3">2</span>
                        <span id="troisieme3">3</span>
                        <span id="quatreiem3">4</span>                           
                        </div>
                    
                        
                </div>
                <div id="arti13 " class="article R4" style="display:none;"> 
                        <div class="premier res res0">
                            <?php $tables = $DB->query('SELECT * FROM tables WHERE id > 24 AND id <= 32 '); ?>
                            <?php foreach ( $tables as $tables): ?>
                                <div class="art1" style="margin-left: 20px;"> 
                                    <img src="img/table/<?= $tables->id; ?>.jpg" style="width: 100%; height: 100%;"> 
                                    <span class="st"></span> <span class="sttt"> <?= $lang['Reserve maintenant'] ?></span> 
                                    <span class="stt"></span> 
                                    <a class="addPanierR" href="includes/addpanierR.php?id=<?= $tables->id; ?>" id="add"><?= $lang['add'] ?></a>
                                </div>

                            <?php endforeach ?>
                        </div>
                        <div class="np">
                        <span id="premier4">1</span>
                        <span id="deuxieme4">2</span>
                        <span id="troisieme4">3</span>
                        <span id="quatreiem4">4</span>                           
                        </div>
                    
                        
                </div>

            <!--End article-->
      </div>
   </div>
   </div>
<script src="javaScript/javaScript.js"></script>
<script src="javaScript/javaSR.js"></script>
<script src="javaScript/language.js"></script>
<!-- jquery cdj min -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- wow animation --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"> </script>
<script type="text/javascript" src="javaScript/appR.js"> </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script >
// wow animat 

  new WOW().init();

</script>
</html>