@extends('layout.masters')
<br><br><br>
<table width="40%" align="center" height="60%">
<tr>
        <td>
 
                 <div class="form-group">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
 
                    <form  method="POST" action="{{ route('password.request') }}">
                    <h2>CREATE NEW PASSWORD</h2>
                        {{ csrf_field() }}
                         <label for="email">Email Address:</label>
                        <input type="hidden" name="token" value="{{ $token }}">
 
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
 
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
 
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
 
                            <div class="form-group">
                                <input id="password" type="password" class="form-control" name="password" required>
 
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Confirm Password</label>
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
 
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                         <td>
    <tr>
</table>
<br>
<br>
      
                