<?php

class Product{
    public int $prod_count;
    public int $id;
    public string $name;
    public int $price;
    public string $description;
    public function __construct($name, $pirce, $prod_count, $description=null){
        $this->prod_count = $prod_count;
        #$this->id = 
        $this->name = $name;
        $this->price = $pirce;
        $this->description = $description;
    }
    public function __toString(){
        return $this->name;
    }
}

class Products{
    private array $all_products;
    public function __construct(){
        $this->all_products = array(
            "standart_cappuchino" => new Product(
                name: "cappuchino",
                #verbose_name: "Капучино",
                prod_count: 0,
                price: 150,
                description: "Капучино на обычном молоке",
            ),
            "standart_cappuchino_cocount" => new Product(
                name: "cappuchino_cocount",
                #verbose_name: "Кокосовое капучино",
                prod_count: 0,
                price: 190,
                description: "Капучино на кокосовом молоке",
            ),
            "standart_cappuchino_soy" => new Product(
                name: "cappuchino_soy",
                #verbose_name: "Соевое капучино",
                prod_count: 0,
                price: 160,
                description: "Капучино на соевом молоке",
            ),
            "standart_latte" => new Product(
                name: "latte",
                #verbose_name: "Латте",
                prod_count: 0,
                price: 150,
                description: "Латте на обычном молоке",
            ),
            "standart_latte" => new Product(
                name: "latte_cocount",
                #verbose_name: "Кокосовое латте",
                prod_count: 0,
                price: 190,
                description: "Латте на кокосовом молоке",
            ),
            "standart_latte_сocount" => new Product(
                name: "latte_soy",
                #verbose_name: "Соевое латте",
                prod_count: 0,
                price: 160,
                description: "Латте на соевом молоке",
            ),
            "espresso" => new Product(
                name: "espresso",
                #verbose_name: "Эспрессо",
                prod_count: 0,
                price: 100,
                description: "Эспрессо 36гр",
            ),
            "standart_raf" => new Product(
                name: "raf",
                #verbose_name: "Раф",
                prod_count: 0,
                price: 160,
                description: "Раф на обычном молоке",
            ),
            "vanilla_raf" => new Product(
                name: "vanila raf",
                #verbose_name: "Ванильный раф",
                prod_count: 0,
                price: 170,
                description: "Ванильный раф на обычном молоке",
            ),
        );
    }
    public function get_all_products(){
        return self::$all_products;
    }
    public function get_product($product){
        return self::$all_products[$product];
    }
}
?>
