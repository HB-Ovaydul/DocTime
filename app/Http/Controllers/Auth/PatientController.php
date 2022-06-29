<?php

namespace App\Http\Controllers\Auth;


use App\Models\auth\patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PatientController extends Controller
{
    /**
     * Patient Register
     */
    public function register(Request $request)
    {
        // Data Validate

        $this-> validate($request,[
            'name'          => 'required',       
            'email'          => 'required|email|unique:patients',           
            'mobile'          => 'required|unique:patients',           
         
        ]);

        // Data Store

        patient::create([
            'name'      => $request -> name,
            'email'      => $request -> email,
            'mobile'      => $request -> mobile,
            'password'      => password_hash($request -> password , PASSWORD_DEFAULT) 
        ]);

        return redirect() -> route('login.page') -> with('success', 'Account Created Successful!');

    }

/**
 * Patient Login
 */

 public function Login(Request $request)
 {
    // Data Validate
    
    $this-> validate($request,[     
        'email'           => 'required|email|unique:patients',           
        // 'mobile'          => 'required|unique:patients',
        'password'        => 'required',           
     
    ]);

    // Login Process

//    if( Auth::guard('patient') -> attempt([ 'email' => $request -> email, 'password' => $request -> password ]) ){
//         return "You Are Access";
//    }else{
//        return"Please Chek Your Password Or Email";
//    }
 }

}
