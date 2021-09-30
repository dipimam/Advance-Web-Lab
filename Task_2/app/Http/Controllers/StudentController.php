<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    //
    public function addStudent(){
        return view('addStudent');
    }
    public function addStudentSubmit(Request $request)
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
                's_name'=>'required|',
                's_password'=>'required',
                's_department'=>'required',
                's_email'=>'email',
                's_cgpa'=>'required'
            ],
            [
                's_name.required'=>'Please put your name'
              
            ]
        );

        $var = new student();
        $var->s_name= $request->s_name;
        $var->s_email = $request->s_email;
        $var->s_password = $request->s_password;
        $var->s_cgpa=$request->s_cgpa;
        $var->s_department = $request->s_department;
        $var->save();


        return view('/'); 
    }

    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request){

        $this->validate(
            $request,
            [
                's_email'=>'required',
                's_password'=>'required'
            ]
            );

        $student = student::where('s_email',$request->s_email)->first();

        if(!empty($student)){
            if(!strcmp($student['s_password'],$request->s_password)){
                return "login successful";
            }
            else{
                return "Incorrect Password";
            }
        }
        else{
            return "Incorrect Email";
        }
        
    }

    public function contact()
    {
        return view('contact');
    }
}
