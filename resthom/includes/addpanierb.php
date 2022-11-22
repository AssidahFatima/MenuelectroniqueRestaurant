<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['id'])){
    $product = $DB->query('SELECT id FROM Boissons WHERE id=:id', array('id' => $_GET['id']));
    if(empty($product)){
        $json['message'] = "Ce plat n'existe pas";
    }
   $panier ->add($product[0]->id);
   $json['error'] = false;
  $json['message'] = 'Le repas a bien été ajouter a votre panier ';
}else{
    $json['message'] = " vous n'avez pas Sélectionne aucune repas ";
}
echo json_encode($json);