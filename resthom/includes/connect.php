<?php
	$nom_complet = $_POST['nom_complet'];
	$numero_table = $_POST['numero_table'];
	$nom_plate = $_POST['nom_plate'];
	$quantity= $_POST['quantity'];
	$price_total= $_POST['price_total'];

	// Database connection
	$conn = new mysqli('localhost','root','','commande');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into commandes(nom_complet, numero_table, nom_plate, quantity,price_total) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisii", $nom_complet,  $numero_table, $nom_plate, $quantity, $price_total);
		$execval = $stmt->execute();
	 die('<a href="javascript:history.back()"> <script> alert("Commande Envoyer avec success"); </script></a> <script language="JavaScript" type="text/javascript">
   setTimeout("window.history.go(-1)",1);
</script>');
		$stmt->close();
		$conn->close();
	}
?>