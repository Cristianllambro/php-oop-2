<?php
class Product
{
    protected string $productName;
    protected float $price;
    protected int $discount = 0;

    public function getProductName() {
        return $this->productName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getDiscountBed() {
        return $this->$price * (1 - $discount / 100);
    }

}

class User
{
    private $isLoggedIn = false;
    private $username;
    private $password;

    



// $obj = new User();
// $obj->bed = 20;


// if ($obj->$isLoggedIn) {
//   $bed = $price->getDiscountBed(20);
// }
