<?php
require "product.php";

class Cart{
    public array $cart;
    public function __construct(array $cart,){
        $this->cart = $cart;
    }
    public function add(Product $prod){
        $this->cart[$prod] = $prod;
    }
    public function delete($id){
        #unset(this->cart[$id]); #ошибка
    }
}
?>