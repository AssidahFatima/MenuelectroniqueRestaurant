
<?php
require 'header.php';
?>

<div class="article" style="width: 100%;"> 
        <?php
        require 'db.class.php';
        $DB = new DB();
        $products = $DB->query('SELECT * FROM tables'); ?>

        <?php foreach ( $products as $products): ?>

        <div class="cn">
        <img src="img/table/<?= $products->id; ?>.jpg">
        <div class="in">
        <h2><?= $products->num_tab; ?></h2>
        </div>
        <a href="modifiert.php?repas=<?=$products->id; ?> ">
        <i class="fas fa-edit" style="color: #000; float: right;
        margin-top: 41px;"></i></a>

        <a href="supprimert.php?repas=<?=$products->id; ?> ">
        <i class="fas fa-trash-alt" style="color: #000; float: right;
        margin-top: 41px;"></i></a>
        </div>

        <?php endforeach ?>


</div>