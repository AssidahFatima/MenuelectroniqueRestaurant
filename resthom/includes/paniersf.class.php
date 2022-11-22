<?php
class panierf{
  private $DB;
  public function __construct($DB){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['panierf'])){
        $_SESSION['panierf'] = array();
    }
$this->DB = $DB;

  }  
  public function total(){
    $total = 0;
    $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $products = array();
            }else{
                $products = $this->DB->query('SELECT id, price FROM Fruits WHERE id IN ('.implode(',',$ids).')');
            }
            foreach ($products as $products){
              $total += $products->price * $_SESSION['panier'][$products->id];
            }
            return $total;
  }

  public function add($product_id){
    if(isset($_SESSION)){
      $_SESSION['panierf'][$product_id]++;
    }
    else{
      $_SESSION['panierf'][$product_id]=1;
    }
            
  }
  public function del($product_id){
      unset($_SESSION['panierf'][$product_id]);
  }
}
