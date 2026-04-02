<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $category = "Mouse";
        $button = "<button>Purchase</button>";
        return view("home",[
            'product_name'=>'Logitech Superlight',
            'product_category'=>$category,
            'button'=>$button
        ]);
    }
}
