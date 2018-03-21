<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use App\Transfer;
use Auth;



class LoginController extends Controller
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
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with(
                'danger','The email or password is incorrect, please try again');
        }

        //create a record in the transfer_user table
        $user = Auth::user();
        $transfer = Transfer::latest()->first();
        //$user->transfers()->attach($transfer);

        //return redirect()->to('/flight');

        if ($user->transfers->contains($transfer)) {

          //return  'Transfer could not be assigned. Duplicate entry!';
            
             return redirect()->to('/homepage');

        } else {

          $user->transfers()->attach($transfer);

          return redirect()->to('/flight');

        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function freshlogin()
    {
        return view('freshlogin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storelogin(Request $request)
    {
       if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->with(
                'danger','The email or password is incorrect, please try again');
        }

        $user = Auth::user();
        $transfer = Transfer::latest()->first();
        $user->transfers()->attach($transfer);
         return redirect()->to('/homepage');


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
    public function destroy()
    {
        $user= Auth::user();
        $transfer = Transfer::latest()->first();

        $user->transfers()->detach($transfer);

        auth()->logout();
        
        return redirect()->to('/homepage');
    }


    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $userSocial = Socialite::driver('facebook')->stateless()->user();

        //return $user->name;

        $findUser = User::where('email',$userSocial->email)->first();
        //create a record from the transfer_user table for facebook user
        if($findUser) {
            Auth::login($findUser);

            $user = Auth::user($findUser);
            $transfer = Transfer::latest()->first();
             $user->transfers()->attach($transfer);

            return redirect()->to('/flight');


        } 
        else {
             $createUser = new User;
        $createUser->name = $userSocial->name;
        $createUser->email = $userSocial->email;
        $createUser->password = bcrypt(123456);

        $createUser->save();
        Auth::login($createUser);
        return redirect()->to('/homepage');

        }

       

        
    }
}
