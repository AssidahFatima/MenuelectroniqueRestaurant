<?php
require 'header.php';
?>

<div class="article" style="width:100%" > 
            
    <?php require 'db.class.php'; $DB = new DB();$boissons = $DB->query('SELECT * FROM boissons'); ?>
    <?php foreach ( $boissons as $boissons): ?>
  
            
        <div class="cn">
                <img src="img/repas/Boissons/<?= $boissons->id; ?>.jpg">
                <div class="in">
                <h2><?= $boissons->nom; ?></h2>
                <span style="font-weight:bold;"><?= $boissons->price; ?> DH</span>
                </div>
                <a href="modifier.php?repas=<?=$boissons->id; ?> ">
                <i class="fas fa-edit" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
                <a href="supprimer.php?repas=<?=$boissons->id; ?> ">
                <i class="fas fa-trash-alt" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
         </div>
            
        <?php endforeach ?>

     
</div>