<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transfer; 
use App\Flight;
use App\Mail\InvoiceMail;
use Auth;



class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //$user = User::with('transfers')->find(1);
        $user->load('transfers.flights');
        //return $user;
        return view('invoice',compact('user'));
        
    //$pdf = PDF::loadView('invoice', compact('user'));
    //return $pdf->stream('invoice.pdf');

        
    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * 
     */
    public function mail(User $user)
    {

        $user= Auth::user();
        $user->email;
         \Mail::to($user)
          ->cc('kevin.kinge@kingcabs.co.ke')
         ->send(new InvoiceMail);

         return "Email has been sent";

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
