<!DOCTYPE html>
<html>
<head>

     <!-- ANIMATE CSS LINK ( REQUIRED )-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/all.css">
    
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: admin.php");
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
<div class="cari ">
	<h2 >Bienvenue</h2>
	<img id="im1" src="img/food.png" style="cursor: pointer;">
</div>
<form class="box " action="" method="post" name="login">
	<h1 class="box-logo box-title"><a href="https://Resthome.online/">Resthome.online</a></h1>
	<h1 class="box-title">Connexion</h1>
	<i class="fas fa-user"></i> <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur"  value="">
	<i class="fas fa-lock"></i><input type="password" class="box-input" name="password" placeholder="Mot de passe" value="">
	<input type="submit" value="Connexion " name="submit" class="box-button">
	<p class="box-register">Mot de passe oublier? <a href="reinitia.php">Réinitialisation du mot de passe</a></p>
	<?php if (! empty($message)) { ?>
		<p class="errorMessage"><?php echo $message; ?></p>
	<?php } ?>
</form>

<!-- jquery cdj min -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- wow animation --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script >
// wow animat 

new WOW().init();


</script>

</body>
</html>