<?php
require 'header.php';
?>
<div class="fajouter" style="    background-color: #F2F3F7;">
<form  action="inser.php" method="post" style="">


<a href="admin.php"><img id="im1" src="img/food.png" style="cursor: pointer; width: 406px;margin-bottom: -79px;" ></a>
          <div class="form-group"> 
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de repas"/>
          </div>
          <div class="form-group"> 
            <input type="file" class="form-control" id="file" name="file">
          </div>
          
          <div class="form-group">
            <input type="number" class="form-control" id="price" name="price" placeholder="price"/>
          </div>
          <input type="submit" class="btn btn-primary" value="Envoyer Commande"/>      

</form>
</div>
</html>