@extends('layout.masters')
<br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
    <div class="form-group">
    <form method="POST" action="restore">
        <h2>Log In</h2>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group" align="center">

            <button style="cursor:pointer" type="submit" class="btn btn-success">Login</button>
            
        <a class="btn btn-primary" href="{{ url('login/facebook') }}" id="btn-fblogin">
         <span class="fab fa-facebook" aria-hidden="true"></span> Login with Facebook </a> 


               
        </div>
        Don't have an account?<a href="/register"> Sign Up</a>
        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>

        <div class="col-md-8 col-md-offset-2">
        @if(Session::has('danger'))
             <div class="alert alert-danger">
               {{ Session::get('danger') }}
             </div>
        @endif
      </div>
    </div>
        
    </form>
     <td>
    <tr>
</table>
<br>
<br>



