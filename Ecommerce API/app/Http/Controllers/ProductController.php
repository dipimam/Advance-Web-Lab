<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Customer;
use App\Models\order;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function list()
    {
        $products = Product::all();

        return $products;
    }

    public function addtocart(Request $req)
    {
        $id=$req->id;
        $cart=[];
        $product=array('p_id'=>$id,'p_quantity'=>1);

        if($req->session()->has('cart')){
            $cart=json_decode($req->session()->get('cart'));
        }
        $cart[]=(object)$product;
        $jsoncart= json_encode($cart);
        $req->session()->put('cart',$jsoncart);


        return redirect()->route('product.list');
    }

    public function emptycart()
    {
        session()->forget('cart');

        return redirect()->route('product.list');
    }

    public function showcart()
    {
        
        $cart= json_decode(session()->get('cart'));

        return $cart;
    }

    public function confirmorder()
    {
        $cart=json_decode(session()->get('cart'));

        foreach($cart as $item){
           
            $customer= Customer:: where('c_phone',session()->get('username'))->first();
            $order = new order();
            $order->p_id= $item->p_id;
            $order->c_id= $customer->c_id;
            $order->status= "ordered";
            $order->time= "10/112021";
            $order->save();

            

        }
        return "ok";
    }

    public function myorder()
    {
         $customer= Customer:: where('c_phone',session()->get('username'))->first();

         $order= order:: where('c_id',$customer->c_id)->first();

       // $product= product:: where('p_id',2)->first();

        return $order->product;
    }
}
