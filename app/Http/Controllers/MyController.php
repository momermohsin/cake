<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function cal(Request $req){

        $t1 = $req->txt1;
        $t2 = $req->txt2;
        $result = $t1 + $t2;
        $_SESSION["res"] = $result;
        return view ("calculation");
    }
    
        
}

