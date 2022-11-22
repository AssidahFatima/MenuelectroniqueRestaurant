<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="css/all.css">
</head>
<body>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>

<form class="box" action="" method="post">
	<h1 class="box-logo box-title"><a href="https://Resthome.online/">Resthome.online</a></h1>
    <h1 class="box-title">Nouveau mot de passe</h1>
	<i class="fas fa-user"></i> <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <i class="fas fa-envelope"></i><input type="text" class="box-input" name="email" placeholder="Email" required />
    <i class="fas fa-lock"></i><input type="password" class="box-input" name="password" placeholder="Nouveau  Mot de passe" required />
    <input type="submit" name="submit" value="Enregistrer" class="box-button" />
    <p class="box-register"><a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>