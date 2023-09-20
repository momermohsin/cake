<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function calculate(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $operator = $request->input('operator');
    
        if ($operator === '+') {
            $result = $number1 + $number2;
        } elseif ($operator === '-') {
            $result = $number1 - $number2;
        } elseif ($operator === '*') {
            $result = $number1 * $number2;
        } elseif ($operator === '/') {
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                return view('error')->with('message', 'Division by zero is not allowed.');
            }
        } else {
            return view('error')->with('message', 'Invalid operator. Please use +, -, *, or /.');
        }
    
        return view('calculation')->with('result', $result);
    }
    
}

