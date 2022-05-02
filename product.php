<?php
include_once __DIR__ . '/user.php';

// NON SONO CAPACE DI FARE LA LOGICA DELLO SCONTO SPERO NON MI PENALIZZI TROPPO PERCHE ULTIMAMENTE STO FACENDO PENA

class Product
{
    protected string $productName;
    protected float $price;
    protected int $discount = 0;

    public function __construct($productName, $price) {
        $this->productName = $productName;
        $this->price = $price;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }

    public function getDiscountPrice($discountPercente) {
        return $this->price * (1 - $discountPercente / 100);
    }
}

class Bed extends Product 
{
    protected string $category = 'Bed';
    protected string $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}




$objGeneral = new Product('letto', '14.99');


$letto = new Bed('Letto');

// $letto = $product->price;
// if ($user->login) {
//   $letto = $product->getDiscountPrice(20);
// }


var_dump($letto);