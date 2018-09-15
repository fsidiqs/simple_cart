<?php
namespace App\Classes;


class Register{
    private $price;
    private $total;
    private $discount;
    private $discountRate;

    public function __construct($price, $discountRate){
        $this->price = $price;
        $this->discountRate = $discountRate;
        $this->calculate();
    }

    function calculate(){
        $this->discount = $this->price * $this->discountRate;
        $this->total = $this->price - $this->discount;
    }

   function getPrice(){
        return $this->price;
    }
   function getTotal(){
        return $this->total;
    }
    function getDiscount(){
        return $this->discount;
    }
   function getDiscountRate(){
        return $this->discountRate;
    }

}