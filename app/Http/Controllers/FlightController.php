<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Transfer;
use App\User;
use App\Mail\InvoiceMail;
use Auth;


class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flight');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Transfer $id)
    {
       $this->validate($request, [
        'airport' => 'required',
        'flightno' => 'required',
        'airname' => 'required',
        'arrivaltime' => 'required',
        'phoneno' => 'required|numeric|size:11',
        'phoneno' => 'required|regex: /^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$/',
        'payment'=> 'required'

        ]);

            $transfer= Transfer::latest()->first();
            $transfer->flights()->create(request(['airport', 'flightno', 'airname','arrivaltime','phoneno', 'requests','payment']));

       $user= Auth::user();
        $user->email;
         \Mail::to($user)
          ->cc('kevin.kinge@kingcabs.co.ke')
         ->send(new InvoiceMail);
      


       return redirect()->to('payment');


      
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
