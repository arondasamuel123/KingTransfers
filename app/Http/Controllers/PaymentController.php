<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
	 public function __construct() {
        
        $this->middleware('customauth');
    }

   public function index(){

   return view('payment');
   }
}
