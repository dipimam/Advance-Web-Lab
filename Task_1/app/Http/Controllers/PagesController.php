<?php

//namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function product()
    {
        $products=array('Iphone x', 'Samsung s10','Samsung s20 ultra');
        $price= array(25000,23000,10000);
        return view('product')
        ->with('products',$products)
        ->with('price',$price);
    }

    public function ourTeam()
    {
        return view('ourTeam');
    }
    public function about()
    {
        return view('about');
    }
}
