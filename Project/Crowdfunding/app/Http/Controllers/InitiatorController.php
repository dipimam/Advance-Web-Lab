<?php

namespace App\Http\Controllers;
use App\Models\Initiator;
use App\Models\Authentication;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class InitiatorController extends Controller
{
    //
    public function login()
    {
        return view('initiator.pages.initiator.login');
    }

    public function loginSubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                
                'i_email'=>'required|email',
                'i_password'=>'required|min:6'
               
                
                
            ],
            [
            
                'i_email.required'=>'Email is required',
                'i_password.required'=>'Password is required',
                'i_password.min'=>'Password have to be atleast 6 character',
              
            ]
        );

        $check= Authentication::where('a_email',$request->i_email)->first();
                            
        if($check!=null)
        {
            if(Hash::check($request->i_password, $check->a_password))
            {
                session()->put('initiator.email',$check->initiator->i_email);
                session()->put('initiator.name',$check->initiator->i_name);
                session()->put('initiator.image',$check->initiator->i_image);

              

                return redirect()->route('initiator.dashboard');

            }
            return redirect()->back()->withErrors(['errors_password' => 'Wrong password']);
            
        }
        return redirect()->back()->withErrors(['errors_email' => 'Email not found']);
    }

    public function registration()
    {
        return view('initiator.pages.initiator.registration');
    }

    public function registrationSubmit(Request $request)
    {

        

        $this->validate(
            $request,
            [
                'i_name'=>'required',
                'i_email'=>'required|email|unique:App\Models\authentication,a_email',
                'i_phone'=>'required|numeric',
                'i_address'=>'required',
                'i_password'=>'required|min:6',
                'ic_password'=>'required|same:i_password'
                
                
            ],
            [
                'i_name.required'=>'Name is required',
                'i_email.required'=>'Email is required',
                'i_email.unique'=>'This email is already taken',
                'i_phone.required'=>'Phone number is required',
                'i_phone.numeric'=>'Phone have to be numeric value',
                'i_address.required'=>'Address is required',
                'i_password.required'=>'Password is required',
                'i_password.min'=>'Password have to be atleast 6 character',
                'ic_password.required'=>'Confirm password is required',
                'ic_password.same'=>'Password and Current password must be same'
              
            ]
        );

     
       
        $initiator= new Initiator();
        $authenticaion= new Authentication();

        $initiator->i_name = $request->i_name;
        $initiator->i_email = $request->i_email;
        $initiator->i_phone = $request->i_phone;
        $initiator->i_address = $request->i_address;

        $authenticaion->a_email=$request->i_email;
        $authenticaion->a_password=Hash::make($request->i_password);
        $authenticaion->a_type='initiator';

        $initiator->save();
        $authenticaion->save();


        return redirect()->route('initiator.login');
    }


    public function dashboard()
    {
        return view('initiator.layout.dashboard');
    }

    public function signout()
    {
        session()->flush();

        return redirect()->route('initiator.login');
    }

    public function changepicture()
    {
        return view('initiator.pages.initiator.changepicture');
    }

    public function changepictureSubmit(Request $request)
    {
        $request->validate(
            [
                'image'=> 'required|mimes:JPG,png,jpeg|max:2048'
            ],
            [
                'image.required'=> 'Please upload a image first'
            ]
            );

        if($request->hasFile('image'))
        {
            $name= time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('uploads',$name,'public');
            
            $entity= Initiator::where('i_email',session()->get('initiator.email'))
                                ->update(['i_image' => $name]);

            
            session()->forget('initiator.image');
            session()->put('initiator.image',$name);
            return redirect()->route('initiator.dashboard');
        }
        return view('initiator.pages.initiator.changepicture');
    }

    public function changepassword()
    {
        return view('initiator.pages.initiator.changepassword');
    }

    public function changepasswordSubmit(Request $request)
    {
        
        $this->validate(
            $request,
            [
                'ir_password'=>'required|min:6',
                'i_password'=>'required|min:6',
                'ic_password'=>'required|same:i_password'
                
                
            ],
            [
                'ir_password.required'=>'Password is required',
                'ir_password.min'=>'Password have to be atleast 6 character',
                'i_password.required'=>'Password is required',
                'i_password.min'=>'Password have to be atleast 6 character',
                'ic_password.required'=>'Confirm password is required',
                'ic_password.same'=>'Password and Current password must be same'
              
            ]
        );

        $check= Authentication::where('a_email',session()->get('initiator.email'))->first();

        
                            
        if($check!=null)
        {
            if(Hash::check($request->ir_password, $check->a_password))
            {
                
                Authentication::where('a_email',session()->get('initiator.email'))
                                ->update(['a_password'=> Hash::make($request->i_password)]);

              

                 session()->flush();

                return redirect()->route('initiator.login');

            }
            return redirect()->back()->withErrors(['errors_irpassword' => 'Wrong password']);
            
        }
        return redirect()->route('initiator.login');
    }

    public function changeinformation()
    {
        $entity= Initiator::where('i_email',session()->get('initiator.email'))->first();

        return view('initiator.pages.initiator.changeinformation')->with('entity',$entity);
    }

    public function changeinformationSubmit(Request $request)
    {
         Initiator::where('i_email',session()->get('initiator.email'))
                    ->update(['i_name'=> $request->i_name,'i_phone'=> $request->i_phone,'i_address'=> $request->i_address]);

        session()->forget('initiator.name');
        session()->put('initiator.name',$request->i_name);

         return redirect()->route('initiator.dashboard');
    }
}
