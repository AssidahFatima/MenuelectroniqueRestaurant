<?php
require 'header.php';
?>
<div class="fajouter">
<form  action="insert.php" method="post" style="">
<a href="admin.php"><img id="im1" src="img/food.png" style="cursor: pointer; width: 406px;margin-bottom: px;" ></a>

         <div class="form-group"> 
            <input type="file" class="form-control" id="file" name="file">
          </div>
          
          <div class="form-group"> 
            <input type="number" class="form-control" id="num_tab" name="num_tab" placeholder="numero de table"/>
          </div>

          <input type="submit" class="btn btn-primary" value="Envoyer Commande"/>      

</form>
</div>
</html>