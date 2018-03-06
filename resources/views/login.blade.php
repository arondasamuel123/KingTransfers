@extends('layout.masters')
<br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
    <div class="form-group">
    <form method="POST" action="session">
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
        <i class="fab fa-facebook"></i> Login with Facebook </a> 
               
        </div>
        

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
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>



