<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Transfer;
use App\User;
use Auth;

class TransferController extends Controller

{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $transfers = Transfer::all();
         return view('')->with('transfers', $transfers);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homepage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $transfer = new Transfer;
            $transfer->from = request('from');
            $transfer->to = request('to');
            $transfer->date = request('date');
            $transfer->return = request('return');
            $transfer->passengers = request('passengers');
            $transfer->luggage = request('luggage');
            
            $transfer->save();
        
            //$user = Auth::user();
            //$user->id;
            //$user->transfers()->create(request(['from', 'to', 'date','return','passengers', 'luggage']));

            return redirect()->to('show');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $id)
    {
        $last_row = DB::table('transfers')->latest()->first();
       return view('show', ['transfer' => $last_row]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $id)
    {
       $last_edit = DB::table('transfers')->latest()->first();
       return view('edit', ['transfer' => $last_edit]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfer $id)
    {

        $this->validate($request, [
        'from' => 'required',
        'to' => 'required',
        'date' => 'required',
        'passengers'=> 'required',
        'luggage'=> 'required'
        ]);
            $transfer = new Transfer;
            
            $transfer->from = request('from');
            $transfer->to = request('to');
            $transfer->date = request('date');
            $transfer->return = request('return');
            $transfer->passengers = request('passengers');
            $transfer->luggage = request('luggage');
            
            $transfer->save();

            return redirect()->to('show');

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
