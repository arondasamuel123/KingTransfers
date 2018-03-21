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
 
                    <form  method="POST" action="{{ route('password.email') }}">
                    <h2>RESET PASSWORD</h2>
                        {{ csrf_field() }}
                         <label for="email">Email Address:</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
 
                            <div class="form-group">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
 
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
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
      