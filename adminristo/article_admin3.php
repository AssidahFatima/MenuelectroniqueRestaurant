<?php
require 'header.php';
?>

<div class="article" style="width:100%" > 
            
    <?php require 'db.class.php'; $DB = new DB();$fruits = $DB->query('SELECT * FROM fruits'); ?>
    <?php foreach ( $fruits as $fruits): ?>
  
            
        <div class="cn">
                <img src="img/repas/fruits/<?= $fruits->id; ?>.jpg">
                <div class="in">
                <h2><?= $fruits->nom; ?></h2>
                <span style="font-weight:bold;"><?= $fruits->price; ?> DH</span>
                </div>
                <a href="modifier.php?repas=<?=$fruits->id; ?> ">
                <i class="fas fa-edit" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
                <a href="supprimer.php?repas=<?=$fruits->id; ?> ">
                <i class="fas fa-trash-alt" style="color: #000; float: right;
                margin-top: 41px;"></i></a>
         </div>
            
        <?php endforeach ?>

     
</div>