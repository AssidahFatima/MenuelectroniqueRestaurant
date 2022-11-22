<?php
require 'header.php';
?>

<div class="article" style="width:100%" > 
            
    <?php require 'db.class.php'; $DB = new DB();$products = $DB->query('SELECT * FROM products'); ?>
    <?php foreach ( $products as $products): ?>
  
            
        <div class="cn">
                <img src="img/repas/Viandes/<?= $products->id; ?>.jpg">
                <div class="in">
                <h2><?= $products->nom; ?></h2>
                <span style="font-weight:bold;"><?= $products->price; ?> DH</span>
                </div>
                <a href="modifier.php?repas=<?=$products->id; ?> ">
                <i class="fas fa-edit" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
                <a href="supprimer.php?repas=<?=$products->id; ?> ">
                <i class="fas fa-trash-alt" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
         </div>
            
        <?php endforeach ?>

     
</div>