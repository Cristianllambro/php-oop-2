<?php
class Product
{
    protected $bed;
    protected $toy;
    protected $discount;

    public function getDiscountBed() {
        return $this->$bed * (1 - $discount / 100);
    }

    public function getDiscountToy() {
        return $this->$toy * (1 - $discount / 100);
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
  $price = $bed->getDiscountBed(20);
}

var_dump($obj);