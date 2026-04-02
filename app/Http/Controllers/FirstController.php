<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function sum(){
        $a = 10;
        $b = 5;
        $total = $a + $b;
        return "Jumlah: ".$total;
    }

    public function sum2(Request $request){
        $a = $request->param1;
        $b = $request->param2;
        $total = $a + $b;
        return "Jumlah: ".$total;
    }

    public function sub(Request $request){
        $a = $request->param1;
        $b = 0;
        if(isset($request->param2)){
            $b = $request->param2;
        }
        $total = $a - $b;
        return "Jumlah: ".$total;
    }
}
