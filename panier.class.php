
<?php
class panier {
    private $DB;
    public function __construct($DB){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=array();
        }
        $this->DB= $DB;
    }

    public function total(){
        $global = 0;
        $total = 0;
       
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $products = array();
        }else {
            $products = $this->DB->query('SELECT id, price FROM products WHERE id IN ('.implode(',', $ids).')');
             
        }
        foreach( $products as $product ){
            $total += $product->price;
        }
        return $total;
    }

    public function add($product_id){
        $_SESSION['panier'][$product_id] = 1; 
    }
    public function del($product_id){
        unset($_SESSION['panier'][$product_id]);
    }

 
}
