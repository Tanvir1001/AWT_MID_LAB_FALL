<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function login(){
        return view('pages.Login');
    }

    public function loginsubmit(Request $request){
         //using requests validate method
         $validate = $request->validate(
            [
                
                // 'username'=>'required|min:5|max:10',
                'username'=>'required',
                'pass'=>'required'
            ],
            [
              
            ]
        );

        return "Login Successfully"; 
    }
        
}

