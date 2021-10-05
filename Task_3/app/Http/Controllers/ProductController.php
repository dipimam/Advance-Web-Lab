<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

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
}
