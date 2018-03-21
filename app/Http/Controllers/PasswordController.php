<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Hash;
use Carbon;
use Password;
use App\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails

class PasswordController extends Controller
{
    

     public function showLinkRequestForm() {
        return view('passwords.email');
    }

    public function sendPasswordResetToken(Request $request) {

    
    //create a new token to be sent to the user. 
    DB::table('password_resets')->insert([
        'email' => $request->email,
        'token' => str_random(60), //change 60 to any length you want
        'created_at' => Carbon::now()
    ]);

    $tokenData = DB::table('password_resets')
    ->where('email', $request->email)->first();

   $token = $tokenData->token;
   $email = $request->email; // or $email = $tokenData->email;

   /**
    * Send email to the email above with a link to your password reset
    * something like url('password-reset/' . $token)
    * Sending email varies according to your Laravel version. Very easy to implement
    */
   $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($response)
                    : $this->sendResetLinkFailedResponse($request, $response);

}

public function showPasswordResetForm($token)
 {
     $tokenData = DB::table('password_resets')
     ->where('token', $token)->first();

     if ( !$tokenData ) return redirect()->to('/homepage'); //redirect them anywhere you want if the token does not exist.
     return view('passwords.reset');
 }

 public function resetPassword(Request $request, $token)
 {
     //some validation
     ...

     $password = $request->password;
     $tokenData = DB::table('password_resets')
     ->where('token', $token)->first();

     $user = User::where('email', $tokenData->email)->first();
     if ( !$user ) return redirect()->to('/homepage'); //or wherever you want

     $user->password;
     $user->save(); //or $user->save();

     //do we log the user directly or let them login and try their password for the first time ? if yes 
     Auth::login($user);

    // If the user shouldn't reuse the token later, delete the token 
    DB::table('password_resets')->where('email', $user->email)->delete();

    //redirect where we want according to whether they are logged in or not.
 }
}
