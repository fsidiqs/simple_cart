<?php
namespace App\Classes;

class PromoCode{
    private $promo_code;
    private $discount;

    public function __construct($promo_code, $discount){
        $this->promo_code = $promo_code;
        $this->discount = $discount;
    }

    public function getPromoCode(){
        return $this->promo_code;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public static function isArrayKeyExist($promo_code, $promo_codes){
       return array_key_exists($promo_code, $promo_codes);
    }

   
}