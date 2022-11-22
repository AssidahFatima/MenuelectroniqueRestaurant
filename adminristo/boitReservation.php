
<?php
require 'header.php';
require 'cont.php';
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>

<div class="pag2">
    <div class="head">
        <div class="container">
        <div class="nav">
            <div class="home">
            <a href="admin.php"><img id="im1" src="img/food.png" style="cursor: pointer;"></a>
                <ul>
                <a href="admin.php"><li id="li4">   Modification</li> </a>
                <a href="boitrece.php"><li id="li5"> Boîte de réception  </li></a>
                <a href="#"><li id="li5"> Boîte de Reservation </li></a>
                </ul>
                <div class="back">
                <div class="contact">
                    <h3>Mohamed Rachdi</h3>
                    <p>Mohamed.rachdi@etu.uae.ac.ma</p>
                    <p>+212 5-xxx / +212 5-xxx</p>
                </div>
                    <div class="d12" style="margin-top: 14px;">
                    <i class="fas fa-chart-bar" style="color: black;"></i> <span>Nombre des clients  : <span style="font-weight: bold;">  <?= $rows_count_value; ?> </span></span>
                    </div>
                    <div class="d12">
                    <i class="fas fa-dollar-sign" style="color: black;     margin-left: 7px;
                    "></i> <span>Revenu du restaurant  : <span style="font-weight: bold;"> 3410 DH</span></span>
                    </div>
                    <div class="d12">
                    <i class="fas fa-exclamation-circle" style="color: black; margin-left: 23px;"></i> <span>Contact le développeur</span>
                    </div>

                </div>
        </div>
        
        </div>
        </div>
        
        </div>
<div class="asid" style="float:left; border: 1px solid #bfbcbc4a;" >
<button type="button" style="margin: 24px 85px 34px 149px;"><a href="logout.php" style="text-decoration: none;padding: 10px;color: #000;font-weight: 700;">déconnexion</a></button>
</div>
<div class="art" style="float: left;width: 69.8%;">
    <div class="par">  <i class="fas fa-inbox" style="color: #000;"></i>   demandes </div>
    <div class="ins"> 
    <h2 style="    margin-left: 38px;">Nom de clients</h2>
        <h2>numero table </h2>
        <h2>date Reservation</h2>
    </div>

<iframe src="Reservation.php" width="99%" height="90%"></iframe>
   
</div>
<script src="javaScript/javaScript.js"></script>
<script type="text/javascript" src="javaScript/calculatrice.js"></script>
<script type="text/javascript">
                document.getElementById('calc').onload=initialiser_calc('calc');
</script>