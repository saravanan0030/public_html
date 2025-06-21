<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function render()
    {
        return view('Electric-Power-&-Control-Panel-Manufacturer-in-India');
    }
    public function contact_us()
    {
        return view('Contact-Us');
    }
    public function Services()
    {
        return view('Services');
    }
    public function ourproducts()
    {
        return view('Product');
    }
    public function About()
    {
        return view('about');
    }
}
