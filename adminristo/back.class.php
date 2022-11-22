<?php
class back{
    private $DB;
public function total(){
        $total = 0;
        $ids = array_keys($_SESSION['back']);
                if(empty($ids)){
                    $tot = array();
                }else{
                    $tot = $this->DB->query('SELECT quantity FROM commandes WHERE id IN ('.implode(',',$ids).')');
                }
                foreach ($tot as $tot){
                  $total +=$_SESSION['back'][$products->id];
                }
                return $total;
}


}