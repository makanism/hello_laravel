<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller{

    function discount(Request $request) {

//input adalah funtion get and post jdi tidak di pisah
        
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
        $discount = $request->input('discount');

        $payment = $productPrice - (($discount/100)*$productPrice);

        $data = [
            'productName'=>$productName,
            'productPrice'=> number_format($productPrice,2,',','.'),
            'discount'=>$discount,
            'payment'=>number_format($payment,2,',','.')
        ];
        return view('product/discount', $data);
    }
}