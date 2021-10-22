<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //

    public function login()
    {
        return view('pages.customer.login');
    }
    
    public function loginsubmit(Request $request)
    {
        

        $this->validate(
            $request,
            [
                'c_phone'=>'required',
                'c_password'=>'required'
                
            ],
            [
                'c_phone.required'=>'Please put your phone number'
              
            ]
        );

       $customer= customer:: where('c_phone',$request->c_phone)
                             ->where('c_password',$request->c_password)->first();

        if($customer==null) // if there is no user how can i return "no user found" by validate() function
        {
           
            return redirect()->route('customer.login'); 

        }       
        
        session()->put('username',$request->c_phone);

        return  redirect()->route('product.list');

    }

    public function logout()
    {
        session()->forget('username');

        return redirect()->route('customer.login');
    }
}
