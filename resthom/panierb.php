<?php
require 'includes/_header.php';
require 'includes/head.php';
if(isset($_GET['del'])){
  $panier->del($_GET['del']);
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

          <div class="menur">
          <i class="fas fa-exchange-alt"></i>
<a href="panier.php"><i class="fas fa-drumstick-bite"></i> Viande</a>
<a href="panierp.php"><i class="fas fa-fish"></i> Poisson</a>
<a href="panierb.php"><i class="fas fa-cocktail"></i> Boissons</a>
<a href="panierf.php"><i class="fas fa-apple-alt"></i> Fruits</a>

</div>
          <!--Start article-->
      <div class="pan1">
          <div class="menu_par">
            <h2>Image </h2>
            <h2>Nom et Price </h2>
            <h2>Quantité </h2>
            <h2>Totale </h2>

          </div>
            <?php 
                $ids = array_keys($_SESSION['panier']);
                if(empty($ids)){
                      $products =array();
                  }else{
                      $products = $DB->query('SELECT * FROM Boissons WHERE id IN ('.implode(',',$ids).')');
                  }
                            
      foreach($products as $products):?>

      <div class="pnier">
            
            <div class="inf1">
            <img class="imr" src="img/repas/Boissons/<?= $products->id; ?>.jpg" style="width: 56px;height: 68px;">
            <h1><?= $products->nom; ?></h1>
            <span><?= number_format($products->price,2,',',' '); ?> DH</span>
            <span class="quantity"><?= $_SESSION['panier'][$products->id]; ?></span>
            <span class="subtotal"><?= number_format($products->price * $_SESSION['panier'][$products->id] ,2,',',' '); ?>DH</span>
            
            <span class="action">
            <a href="panierb.php?del=<?= $products->id; ?>" class="del"><i class="del fas fa-trash-alt"></i></a>
                    </span>
            </div>
        <?php endforeach; ?>

    <div style="border:1px solid #fff">
      <div class="rowtotal"> TOTAL : <?= number_format($panierb->total(),2,',',' '); ?> DH
      <div id="smart-button-container" style="width: 290px;margin-top: -20px;">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'white',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":<?= number_format($panierb->total(),2,'.',' '); ?>}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
    
    <form  action="includes/connect.php" method="post" style="    display: flex;margin-left: 25px;">
          <div class="form-group">
            <input type="text" class="form-control" id="nom_complet" name="nom_complet" placeholder="Nom Complet"/>
          </div>

          <div class="form-group">
          <input type="text" class="form-control" id="numero_table" name="numero_table" placeholder="votre numero sur table ou votre adress" />
          </div>
        <div style="display:none">
              <div class="form-group">
                    <input type="text" class="form-control" id="nom_plate" name="nom_plate" placeholder="<?= $products->nom; ?>" value="<?= $products->nom; ?>"/>
              </div>

              <div class="form-group">
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="<?= $_SESSION['panier'][$products->id]; ?>" value="<?= $_SESSION['panier'][$products->id]; ?>" />
              </div>
              <div class="form-group">
                    <input type="text" class="form-control" id="price_total"  name="price_total"  placeholder=" <?= number_format($panier->total(),2,',',' '); ?> DH" value="<?= number_format($panier->total(),2,',',' '); ?>" />
              </div>
          </div>
        <h2 style="    width: 370px;">
            <input type="submit" class="btn btn-primary" value="Envoyer Commande"/>
        </h2>


      </form>
</div>
  </div>
   <!--END article-->
</div>
</body>
</html>