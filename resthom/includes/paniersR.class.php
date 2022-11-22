<?php
class panierR{
  private $DB;
  public function __construct($DB){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['panierR'])){
        $_SESSION['panierR'] = array();
    }
$this->DB = $DB;

  }  

  public function add($product_id){
    if(isset($_SESSION)){
      $_SESSION['panierR'][$product_id]=0;
      $_SESSION['panierR'][$product_id]++;
    }
    else{
      $_SESSION['panierR'][$product_id]=1;
    }
            
  }
  public function del($product_id){
      unset($_SESSION['panierR'][$product_id]);
  }
}
