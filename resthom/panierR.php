<?php
require 'includes/_header.php';
require 'includes/head.php';
?>
<?php
if(isset($_GET['del'])){
    $panierR->del($_GET['del']);
}
?>
<body>
<div class="page1 ">

<div class="head">
                 <!-- start header-->
      <div class="container">
                <div class="nav">
                              <div class="home">
                              <a href="index.php">
                                  <img id="im1" src="img/food.png" style="cursor: pointer;"></a>
                                  <ul>
                                      <a href="carte.php" ><li id="li1">A la Carte</li></a>
                                      <a href="Reservation.php" ><li id="li2">réservation</li></a>
                                      <a href="commande.php" > <li id="li3">commander</li></a>
                                  </ul>
                                </div>

                                <div class="lange">
            <div id="languageContainer" style="position:relative;">
                    <div id="arabic" ><img src="img/icon/maroc.jpg" style="width: 51px;height: 50px;"></div>
                    <div id="english"><img src="img/icon/english.png"></div>
                    <div id="french" ><img src="img/icon/french.png" ></div>
                    <div id="chinese" ><img src="img/icon/chinese.png"></div>
                    <div id="russian" ><img src="img/icon/russian.png"></div>
            </div>  
            </div>

                </div>
      </div>
                 <!-- END header-->

                  <!--Start article-->
      <div class="pan1">
                        <div class="menu_par">
                            <h2>Image </h2>
                            <h2>numero de table </h2>

                        </div>
                          <?php 
                          $ids = array_keys($_SESSION['panierR']);
                          if(empty($ids)){
                              $tables =array();
                          }else{
                              $tables = $DB->query('SELECT * FROM tables WHERE id IN ('.implode(',',$ids).')');
                          }
                          
                          foreach($tables as $tables):

                          ?>

        <div class="pnier">
          
          <div class="inf1 infz1">
          <img class="imr" src="img/table/<?= $tables->id; ?>.jpg">
          <span class="nemuro_tab"><?= $tables->num_tab; ?></span>
          </div>
          <span class="action">
          <a href="panierR.php?del=<?= $tables->id; ?>" class="del"><i class="del fas fa-trash-alt"></i></a>
                  </span>

                  <div style="border:1px solid #fff">


          <?php endforeach; ?>
          
                      <form  action="includes/envR.php" method="post" style="    display: flex;
                          margin-left: 25px;     margin-top: 64px;">
                                                <div class="form-group">
                                                        <input
                                                          type="text"
                                                          class="form-control"
                                                          id="nom_complet"
                                                          name="nom_complet"
                                                          placeholder="Nom Complet"
                                                        />
                                                      </div>
                                                    <div class="form-group">
                                                    <input type="datetime-local" id="date" name="date"
                                                    min="2021-06-28T00:00" max="2050-06-14T00:00" value="">
                                                     
                                                      </div>

                                                      <div style="display:none">
                                                      <div class="form-group">
                                                        <input
                                                          type="text"
                                                          class="form-control"
                                                          id="numero_table"
                                                          name="numero_table"
                                                          placeholder="<?= $tables->num_tab; ?>"
                                                          value="<?= $tables->num_tab; ?>"
                                                        />
                                                      </div>
                                                      
                                                         </div>
                                  <h2 style="    width: 370px;">
                          <input type="submit" class="btn btn-primary" value="Envoyer Commande"/></h2>


                      </form>
      </div>
                  <!--END article-->
</div>
</body>
</html>