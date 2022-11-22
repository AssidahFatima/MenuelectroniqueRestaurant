<?php
require 'header.php';
require 'db.class.php';
$DB = new DB();
?>
<?php $products = $DB->query('SELECT * FROM commandes'); ?>
<?php foreach ( $products as $products): ?>         
            
<div class="div" style="  width: 632px;height: 1200px;background: black;margin: auto;border-radius: 9px;font-family: monospace; border:2px solid #fff">
<a href="boitrece.php"><img id="im1" src="img/food.png" style="width: 124px;cursor: pointer;margin-left: 254px;margin-right: 275px;"></a>
<h4 style="color:#fff;text-align: center;">***********************************************************</h4>
<h1 style="color:#fff;text-align: center;">Bienvenue <?= $products->nom_complet; ?> </h1>
<h2 style="color:#fff;text-align: center;">Nome de repas est : <?= $products->nom_plate; ?></h2>
<h2 style="color:#fff;text-align: center;"> Prix Total : <?= $products->price_total; ?> DH</h2>
<h2 style="color:#fff;text-align: center;"> numéro de table est <?= $products->numero_table; ?> </h2>
<h4 style="color:#fff;text-align: center;">***********************************************************</h4>
<div class="impri"> <i class="fas fa-print"></i> <span><a href="#" OnClick="javascript:window.print()">Imprimer</a></span></div>
        </div>
</div>
<?php endforeach ?>