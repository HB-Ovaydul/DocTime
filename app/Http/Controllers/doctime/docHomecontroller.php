<?php

namespace App\Http\Controllers\doctime;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class docHomecontroller extends Controller
{

    /**
     * Home Page
     */
    public function HomePage()
    {
        return view('frontend.home');
    }

    /**
     * Login page
     */

    public function LoginPage()
    {
        return view('frontend.login');
    }

    /**
     *  Doctor Register Page
     */

     public function DoctorRegisterPage()
     {
        return view('frontend.doctor.register');
     }

     public function DoctorDeshPage()
     {
        return view('frontend.doctor.deshboard');
     }

     /**
      * Patient Register page 
      */

     public function PatientRegisterPage()
     {
        return view('frontend.patient.register');
     }

     public function PatientDeshPage()
     {
        return view('frontend.patient.deshboard');
     }

}
