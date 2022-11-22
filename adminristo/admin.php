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

<body>
    <div class="pag1 intro" style="display: none;">
    <div class="head">
        <div class="container">
        <div class="nav">
            <div class="home">
            <a href="admin.php"><img id="im1" src="img/food.png" style="cursor: pointer;"></a>
                <ul>
                <a href="#"><li id="li2"> Modification </li></a>
                    <a href="boitrece.php"><li id="li3"> Boîte de réception</li></a>
                    <a href="boitReservation.php"><li id="li5"> Boîte de Reservation  </li></a>
                </ul>

                <div class="back">
                <div class="contact">
                    <h3>Mohamed Rachdi</h3>
                    <p>Mohamed.rachdi@etu.uae.ac.ma</p>
                    <p>+212 5-xxx / +212 5-xxx</p>
                </div>
                    <div class="d12" style="margin-top: 14px;">
                    <i class="fas fa-chart-bar" style="color: black;"></i> <span>Nombre des clients  : <span style="font-weight: bold;"> <?= $rows_count_value; ?> </span></span>
                    </div>
                    <div class="d12">
                    <i class="fas fa-dollar-sign" style="color: black;     margin-left: 7px;
                    "></i> <span>Revenu du restaurant  : <span style="font-weight: bold;"> 3540 DH </span></span>
                    </div>
                    <div class="d12">
                    <i class="fas fa-exclamation-circle" style="color: black; margin-left: 23px;"></i> <span>Contact le développeur</span>
                    </div>
                    </div>
                </div>
        </div>
        
        </div>
        </div>
        
        </div>
        <div class="tot">
<div class="aside">
    <div class="botton">
        <span><span>+</span><a href="insere1.php"> ajouter au menu</a> </span>
    </div>
    <div class="pars">
        <div class="d12">
            <i class="fas fa-list"></i><span><a href="#">les repas</a></span></div>
        <div class="d12">
            <i class="fas fa-list"></i><span><a href="table.php">les table</a></span></div>
        <div class="d12">
    <i class="fab fa-themeisle" style="margin-left: -15px;"></i><span>thème </span></div>
        <div class="d12">
        <a href="http://localhost/phpmyadmin/" style="text-decoration:none;">  <i class="fas fa-cog" style=" margin-left: 17px;"></i><span> paramètres</span> </a></div>
        <button type="button" style="margin: 47px 114px 62px 104px; padding: 9px 25px;"><a href="logout.php" style="text-decoration: none;padding: 10px;color: #000;font-weight: 700;">déconnexion</a></button>



</div>
</div>  
<div class="np" style="">
            <span class="s1"><i class="fas fa-drumstick-bite icc "></i>Viande</span>
            <span class="s2"><i class="fas fa-fish icc "></i>Poisson</span>
            <span class="s3"><i class="fas fa-cocktail icc "></i>Boissons</span>
            <span class="s4"><i class="fas fa-apple-alt icc "></i>Fruits</span>
        </div>
<iframe class="dis1 intro" src="article_admin.php" style="display:none;">
</iframe>
<iframe class="dis2 dis1" src="article_admin1.php" style="display:none;">
</iframe>
<iframe class="dis3 dis1" src="article_admin2.php" style="display:none;">
</iframe>
<iframe class="dis4 dis1" src="article_admin3.php" style="display:none;">
</iframe>


</div>
</div>
<script src="javaScript/JS.js"></script>
</body>
</html>