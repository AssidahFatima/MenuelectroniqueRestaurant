<?php
require '_header.php';
$json = array('error' => true);
if(isset($_GET['id'])){
    $tables = $DB->query('SELECT id FROM tables WHERE id=:id', array('id' => $_GET['id']));
    if(empty($tables)){
        $json['message'] = "Cette table n'existe pas";
    }
   $panierR ->add($tables[0]->id);
   $json['error'] = false;
   $json['message'] = 'La table a bien été ajouter a votre panier ';
}else{
    $json['message'] = " vous n'avez pas Sélectionne aucune table ";
}
echo json_encode($json);