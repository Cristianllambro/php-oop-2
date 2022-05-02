<?php
class Product
{
    protected string $productName;
    protected $price;
    protected int $discount = 0;

    public function __construct($productName, $price, $discount) {
        $this->productName = $productName;
        $this->price = $price;
        $this->discount = $discount;
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

    // public function getDiscountBed() {
    //     return $this->$price * (1 - $discount / 100);
    // }

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

$objGeneral = new Product('letto', '14.99', 10);
$obj = new Bed('Letto');
var_dump($objGeneral);
var_dump($obj);