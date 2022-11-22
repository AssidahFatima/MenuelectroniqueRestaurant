<?php
class panierb{
  private $DB;
  public function __construct($DB){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['panierb'])){
        $_SESSION['panierb'] = array();
    }
$this->DB = $DB;

  }  
  public function total(){
    $total = 0;
    $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $products = array();
            }else{
                $products = $this->DB->query('SELECT id, price FROM Boissons WHERE id IN ('.implode(',',$ids).')');
            }
            foreach ($products as $products){
              $total += $products->price * $_SESSION['panier'][$products->id];
            }
            return $total;
  }

  public function add($product_id){
    if(isset($_SESSION)){
      $_SESSION['panierb'][$product_id]++;
    }
    else{
      $_SESSION['panierb'][$product_id]=1;
    }
            
  }
  public function del($product_id){
      unset($_SESSION['panierb'][$product_id]);
  }
}
