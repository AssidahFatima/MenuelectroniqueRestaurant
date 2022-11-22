<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commande";
$num_tab= $_POST['num_tab'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tables (num_tab)
VALUES ('$num_tab')";

if ($conn->query($sql) === TRUE) {
  die(' la table est bien ajouter  ...  <a href="javascript:history.back()"> retourner sur le catalogue</a> <script language="JavaScript" type="text/javascript">
   setTimeout("window.history.go(-1)",2000);
</script>');

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>