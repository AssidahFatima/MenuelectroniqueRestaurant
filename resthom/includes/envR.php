<?php
	$nom_complet = $_POST['nom_complet'];
	$numero_table = $_POST['numero_table'];
	$date = $_POST['date'];
	// Database connection
	$conn = new mysqli('localhost','root','','commande');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into reservation (nom_complet, numero_table, date ) values(?, ?, ?)");
		$stmt->bind_param("sis", $nom_complet, $numero_table, $date);
		$execval = $stmt->execute();
		echo $execval;
	 die(' Reservation Envoyer mrc ...  <a href="javascript:history.back()"> retourner sur le catalogue</a> <script language="JavaScript" type="text/javascript">
   setTimeout("window.history.go(-1)",1000);
</script>');
		$stmt->close();
		$conn->close();
	}
?>