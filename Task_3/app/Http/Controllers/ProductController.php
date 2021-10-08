<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\customer;

class ProductController extends Controller
{
    //
    public function AddProduct()
    {
        return view("AddProduct");
    }

    
    public function AddProductSubmit(Request $request)
    {
        //using requests validate method
        /*$validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'id'=>'required',
                'dob'=>'required',
                'email'=>'email'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );*/
        //using class validate method
        $this->validate(
            $request,
            [
                'name'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'description'=>'required'
                
            ],
            [
                'name.required'=>'Please put your name'
              
            ]
        );

        $var = new product();
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description=$request->description;
    
        $var->save();


        return redirect('/Product/List'); 
    }

    public function Read()
    {
         $products= product::all();

         return view('Read')->with('products',$products);
        
    }

    public function Edit(Request $request)
    {
           $id=$request->id;
           
           $products = product::where('id',$id)->first();

           return view('Edit')->with('products',$products);
    }

    public function EditSubmit(Request $request)
    {
        //using requests validate method
        /*$validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'id'=>'required',
                'dob'=>'required',
                'email'=>'email'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );*/
        //using class validate method
        $this->validate(
            $request,
            [
                'name'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'description'=>'required'
                
            ],
            [
                'name.required'=>'Please put your name'
              
            ]
        );

        $var = product::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description=$request->description;
    
        $var->save();


        return redirect('/Product/List'); 
    }

    public function Delete(Request $request)
    {
           $id=$request->id;
           
           $products = product::where('id',$request->id)->delete();
          
           return redirect('/Product/List'); 
    }

    public function login()
    {
       return view("Login");
    }

    public function loginSubmit(Request $request)
    {
        $customers = customer::where('phone',$request->phone)->first();

        if($customers!=null)
        {
            if(!strcmp($customers->password,$request->password))
            {
                return redirect('/Product/Shop');
            }
            else{
                return "Wrong Password";
            }
        }
        return "User not found";
        
    }

    public function Shop()
    {
        $products= product::all();

         return view('Shop')->with('products',$products);
        
    }

    public function AddToCart(Request $request)
    {
        session_start();

        $product = product::where('id',$request->id)->first();
        $cartProduct=array();

        if(isset($_SESSION['cart'])==null)
        {
            
        
        array_push($cartProduct,$product);
        $_SESSION['cart'] = json_encode($cartProduct);

        

        }
        else{

            $cart=$_SESSION['cart'];
            $cartProduct= json_decode($cart);
            array_push($cartProduct,$product);
            $_SESSION['cart'] = json_encode($cartProduct);
           

        }
        
        return redirect('/Product/Shop');
        
    }

    public function ShowCart()
    {
        session_start();
        
        if(isset($_SESSION['cart'])!=null)
        {
            $cart=$_SESSION['cart'];
            $cartProduct= json_decode($cart);

            return view('ShowCart')->with('cartProduct',$cartProduct);
        }
        
    }

    public function DeleteOrder(Request $request)
    {

        session_start();
        
        if(isset($_SESSION['cart'])!=null)
        {
            $cart=$_SESSION['cart'];
            $cartProduct= json_decode($cart);



            foreach($cartProduct as $product)
            {
                if($product->id == $request->id)
                {
                    unset($cartProduct[$product->id]);
                }

            }

    
            return redirect('/Product/ShowCart');
        }
       
    }
}
