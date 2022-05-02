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

    public function setCheckCard($expiration) {
        $date = date('Y/m/d');
        if($date <= $expiration) {
            $this->$expiration = 'Carta valida';
        } else {
            $this->$expiration = 'Carta scaduta';
        }
    }
}

$card = new CreditCard('123456789', 'Unicredit', '2020/01/01' ,'345');
$card->setCheckCard('2020/01/01');
var_dump($card);