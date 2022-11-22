<?php
include 'connect.php';
if(isset($_POST['ok'])){
    $requette ="DELETE FROM tables  WHERE id = ".$_POST['id']." ";
    if($connection->exec($requette)){
        echo "bien supprimer";
    }
    else{
        echo "suppression refusée";
    }

}
if(isset($_GET['repas']))
{
   //var_dump($_GET);
   $id = $_GET['repas'];
   $aff = "SELECT * FROM tables WHERE id = ".$id."";
   $re = $connection->query($aff);
   $data = $re->fetchALL(PDO::FETCH_ASSOC);
   ?>
   <form action="supprimert.php" method="POST">
   <input name="id" type="number" value=<?php echo($data[0]['id'])?>>
   <input type="submit" name="ok">
   </form>
   <?php
}
?>