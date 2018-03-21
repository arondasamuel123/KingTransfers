@extends('layout.masters')
<br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
    <form method="POST" action="/begin">
        <h2>Register</h2>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group" align="center">
            <button style="cursor:pointer" type="submit" class="btn btn-success">Register</button>
        </div>
       
    </form>
     Already have an account?<a href="/login"> Sign In</a>
    <td>
    <tr>
</table>
<br>
<br>