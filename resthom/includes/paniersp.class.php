<?php
class panierp{
  private $DB;
  public function __construct($DB){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['panierp'])){
        $_SESSION['panierp'] = array();
    }
$this->DB = $DB;

  }  
  public function total(){
    $total = 0;
    $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $poisson = array();
            }else{
                $poisson = $this->DB->query('SELECT id, price FROM poisson WHERE id IN ('.implode(',',$ids).')');
            }
            foreach ($poisson as $poisson){
              $total += $poisson->price * $_SESSION['panier'][$poisson->id];
            }
            return $total;
  }

  public function add($product_id){
    if(isset($_SESSION)){
      $_SESSION['panierp'][$product_id]++;
    }
    else{
      $_SESSION['panierp'][$product_id]=1;
    }
            
  }
  public function del($product_id){
      unset($_SESSION['panierp'][$product_id]);
  }
}
