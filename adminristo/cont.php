<?php
$databaseHost = 'localhost';   //your db host 
$databaseName = 'commande';  //your db name 
$databaseUsername = 'root';    //your db username 
$databasePassword = '';//   db password 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
 
$sql = "SELECT * FROM commandes";
 
$mysqliStatus = $mysqli->query($sql);
 
$rows_count_value = mysqli_num_rows($mysqliStatus);

$mysqli->close();

?>
