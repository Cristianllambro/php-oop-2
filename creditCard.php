<?php
include_once __DIR__ . '/user.php';

class CreditCard
{
    protected $numberCard;
    protected $bank;
    protected $expiration;
    protected $cvc;

    public function __construct($numberCard, $bank, $expiration, $cvc){
        $this->numberCard = $numberCard;
        $this->bank = $bank;
        $this->expiration = $expiration;
        $this->cvc = $cvc;
    }

    public function getNumberCard() {
        return $this->numberCard;
    }
     
    public function setNumberCard($numberCard){
        $this->numberCard = $numberCard;
    }

    public function getBank() {
        return $this->banck;
    }

    public function setBank($bank) {
        $this->bank = $bank;
    }

    public function getExpiration() {
        return $this->expiration;
    }

    public function setExpiration($expiration){
        $this->expiration = $expiration;
    }

    public function getCvc() {
        return $this->cvc;
    }

    public function setCvc($cvc) {
        $this->cvc = $cvc;
    }
}

$card = new CreditCard('123456789', 'Unicredit', '05/25', '345');
var_dump($card);