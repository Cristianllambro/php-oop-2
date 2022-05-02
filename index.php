<?php
class Product
{
    protected string $bed;
    protected float $price;
    protected int $discount = 0;

    public function getBed() {
        return $this->bed;
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

    public function getLoginOut(){
        $this->isLoggedIn = true;
    }

    public function getisLoggedIn() {
        return $this->isLoggedIn;
    }
}



$obj = new User();
$obj->bed = 20;


if ($obj->$isLoggedIn) {
  $bed = $price->getDiscountBed(20);
}

var_dump($obj);