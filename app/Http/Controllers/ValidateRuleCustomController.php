<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;

class ValidateRuleCustomController extends Controller
{
    public function show(Request $Request){
        return view('validate');
    }
//    public function validateCustom(ValidationRequest $request){
//        return 'You have validate succses';
//    }
    public  function  valid(ValidationRequest $Request)
    {
        echo  'hi hi';
    }
}
