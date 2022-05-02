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

class User extends products
{
    private $isLoggedIn = false;
    private $userName;
    private $password;

    public function __construct($_userName, $_password){
        if(!$isLoggedIn){
            $this->userName = $_userName;
            $this->password = $_password;
        }
    }

    public function getisLoggedIn() {
        return $this->isLoggedIn;
    }
}

// $price = $product->price;

// if ($user->isLoggedIn) {
//   $price = $product->getDiscountPrice(20);
// }

  