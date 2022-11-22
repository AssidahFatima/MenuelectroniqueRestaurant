<?php
require 'header.php';
include 'connect.php';
if(isset($_POST['ok'])){
    $requette ="UPDATE products SET id ='".$_POST['id']."', nom ='".$_POST['nom']."', price =".$_POST['price']."  WHERE id =".$_POST['id']."";
    if($connection->exec($requette)){
        echo "
        <button style=' float: left;padding: 10px; background-color:#fff;border-radius: 16px;margin-top:10px;'><a href='article_admin.php' style='text-decoration:none;color:#000;'>Retourner a la page principale</a></button>
       <span style='font-size: 24px;color: #00e226;position: absolute;top: 176px;left: 45%;'> Bien Modifier</span>
        ";
    }
    else{
        echo "
        <button style=' float: left;padding: 10px; background-color:#fff;border-radius: 16px;margin-top:10px;'><a href='article_admin.php' style='text-decoration:none;color:#000;'>Retourner a la page principale</a></button>
        <span style='font-size: 24px;color: #fb0606;position: absolute;top: 176px;left: 45%;'>Modification refusée</span>
        ";
    }

}
if(isset($_GET['repas']))
{
   //var_dump($_GET);
   $id = $_GET['repas'];
   $aff = "SELECT * FROM products WHERE id = ".$id."";
   $re = $connection->query($aff);
   $data = $re->fetchALL(PDO::FETCH_ASSOC);
   ?>
   <form class="modi" action="modifier.php" method="POST">
       <button style="float: left;padding: 10px;background-color: #fff;border-radius: 16px;margin-top:-36px;"><a href="article_admin.php" style="text-decoration:none;color:#000;">Retourner a la page principale</a></button>
       <h2>Modification d'une repas</h2>
   <span style="margin-top:10px;">ID</span> <input name="id" type="number" value=<?php echo($data[0]['id'])?>>
   <span style="margin-top: 20px;">Nom </span> <input name="nom" type="text" value=<?php echo($data[0]['nom'])?>>
   <span style="margin-top: 19px;">Prix (DH)</span> <input name="price" type="number" value=<?php echo($data[0]['price'])?>>
   <input type="submit" name="ok" value="Enregistrer">
   </form>
   <?php
}
?>
