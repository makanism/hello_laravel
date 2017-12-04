<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller{

    function index(){
        $products = DB::select("select * from products");
        $data =[ 
            'products'=>$products
        ];
        return view('product/index',$data);
    }
    
    function add(Request $request){
        
        $data = [
            'success'=>false
        ];

        

        if ($request->isMethod('post')){
            $productName = $request->input('product_name');
            $productPrice = $request->input('product_price');
            $rating = $request->input('rating');

      $returnValue = DB::insert('insert into products(name, price, rating) values(?, ?, ?)',
        [$productName, $productPrice, $rating]);
        
        
        if($returnValue){
            $data = [
                'success'=>1
            ];
            }
        }
        return view('product/add',$data);

    }

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