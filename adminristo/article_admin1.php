<?php
require 'header.php';
?>

<div class="article" style="width:100%" > 
            
    <?php require 'db.class.php'; $DB = new DB();$poisson = $DB->query('SELECT * FROM poisson'); ?>
    <?php foreach ( $poisson as $poisson): ?>
  
            
        <div class="cn">
                <img src="img/repas/poisson/<?= $poisson->id; ?>.jpg">
                <div class="in">
                <h2><?= $poisson->nom; ?></h2>
                <span style="font-weight:bold;"><?= $poisson->price; ?> DH</span>
                </div>
                <a href="modifier.php?repas=<?=$poisson->id; ?> ">
                <i class="fas fa-edit" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
                <a href="supprimer.php?repas=<?=$poisson->id; ?> ">
                <i class="fas fa-trash-alt" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
         </div>
            
        <?php endforeach ?>

     
</div>