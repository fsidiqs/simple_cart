<?php
include (app_path("Classes/SetupPromoCodes.php"));

?>
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
    <style>
    input[type='number'] {
        -moz-appearance:textfield;
    }

    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
    }
    </style>
    <script src="main.js"></script>

</head>
<body>
    <div class="row container-fluid">
        <div class="col-4">
            <form method="POST" action="{{url('/store')}}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                        </div>
                        <input name="amount" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount">Kode Promo</label>
                    <div class="input-group">
                        <input name="promo_code" type="text" class="form-control">
                    </div>
                </div>
                <input type="submit" value="Calculate">
            </form>

          		   <table class="table">
                <thead>
                    <tr>
                    <th colspan="3">Result</th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                    <th scope="row">Price</th>
                    <td></td>
                    <td align="right">Rp. {{isset($price) ?  number_format($price,2,",","."): "0"}}</td>
                    </tr>
                    <tr>
                    <th scope="row">Discount</th>
                    <td><br>{{isset($promo_code) ? 'Promo Code: '.$promo_code : false}} ( {{isset($discountRate) ?  $discountRate*100 . "%" : ""}})</td>
                    <td align="right">Rp. {{isset($discount) ?  number_format($discount,2,",","."): "0"}}</td>
                    </tr>
                    <tr class="table-success">
                    <th scope="row">Total</th>
                    <td></td>
                    <td align="right">Rp. {{isset($discount) ?  number_format($total,2,",","."): "0"}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>