<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller{
    function delete(Request $request){
        $productId = $request->input('product_id');
        $returnValue = DB::delete('DELETE from products WHERE id=?',[$productId]);
        if($returnValue){
            return "Data Deleted";
        }else{
            return "error";
        }

    }
        
    
    function edit($product_id, Request $request){
        
        $product= DB::select('SELECT*FROM products where id=?',[$product_id]);
        $success = false;
        if($request->isMethod('post')){
            $productName = $request->input('product_name');
            $productPrice = $request->input('product_price');
            $rating = $request->input('rating');

            $returnValue = DB::update('UPDATE products SET name=?, price=?, rating=? WHERE id=?',
            [$productName, $productPrice, $rating, $product_id]);
            if($returnValue){
                $success= true;
            }
        }

        $product=reset($product);
        $data = [
            'product'=>$product,
            'success'=>$success
        ];
        return view('product/edit',$data);
    }

    function detail($product_id, Request $request){
        $product= DB::select('SELECT*FROM products where id=?',[$product_id]);
        //cek data
        //dd($product)
        //var_dump($products);
        //ambil first element
        $product=reset($product);
        $data = [
            'product'=>$product
        ];
        return view('product/detail',$data);
    }

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