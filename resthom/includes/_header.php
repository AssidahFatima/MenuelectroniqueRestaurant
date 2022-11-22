<?php
require 'db.class.php';
require 'paniers.class.php';
require 'paniersR.class.php';
require 'paniersp.class.php';
require 'paniersb.class.php';
require 'paniersf.class.php';

$DB = new DB();
$panier = new panier($DB);
$panierR = new panierR($DB);
$panierp = new panierp($DB);
$panierb = new panierb($DB);
$panierf = new panierf($DB);
?>