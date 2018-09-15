<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Classes\PromoCode;
use App\Classes\Register;

class RegisterController extends Controller
{
    
    public function index()
    {
        return "works";
    }

    public function store(Request $request)
    {
        include_once (app_path("Classes/SetupPromoCodes.php"));
        $promo_code_find =  $request['promo_code'];
        
        $promo_code = (PromoCode::isArrayKeyExist($promo_code_find, $promo_codes) ?  $promo_code_find : false);

   

       
        $register = new Register($request['amount'], $promo_code ? $promo_codes[$promo_code]->getDiscount(): 0);
        $total = $register->getTotal();
        $price = $register->getPrice();
        $discount = $register->getDiscount();
        $discountRate = $register->getDiscountRate();
        return view('products', compact('total', 'price', 'discount', 'discountRate','promo_code'));


    }
}
