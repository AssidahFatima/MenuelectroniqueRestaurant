<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commande";
$nom_complet = $_POST['nom'];
$price= $_POST['price'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO products (nom, price)
VALUES ('$nom_complet', '$price')";

if ($conn->query($sql) === TRUE) {
  die(' la repas est bien ajouter  ...  <a href="javascript:history.back()"> retourner sur le catalogue</a> <script language="JavaScript" type="text/javascript">
   setTimeout("window.history.go(-1)",2000);
</script>');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>