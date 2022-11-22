<?php
class back{
  private $DB;
  public function __construct($DB){
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['back'])){
        $_SESSION['back'] = array();
    }
$this->DB = $DB;

  }  
  public function total(){
    $total = 0;
    $ids = array_keys($_SESSION['back']);
            if(empty($ids)){
                $commandes = array();
            }else{
                $commandes = $this->DB->query('SELECT quantity FROM commandes WHERE id IN ('.implode(',',$ids).')');
            }
            foreach ($commandes as $commandes){
              $total += $commandes->quantity;
            }
            return $total;
  }

  
}