@extends('layout.masters')
<br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
            <form method="POST" class="float-label-control" action="store">
                <h2><center>Flight Details</center></h2>
                {{ csrf_field() }}
                <div class="form-group float-label-control">
                    <label for="name">Airport flying from:</label>
                    <input type="text" class="form-control" id="airport" name="airport">
                </div>
         
                <div class="form-group float-label-control ">
                    <label for="name">Flight Number:</label>
                    <input type="text" class="form-control" id="flightno" name="flightno">
                </div>
         
                <div class="form-group float-label-control">
                    <label for="name">Airline Name:</label>
                    <input type="text" class="form-control" id="name" name="airname">
                </div>

                <div class="form-group float-label-control">
                    <label for="time">Flight arrival time:</label>
                    <input type="time" class="form-control" id=arriva; name="arrivaltime">
                </div>


                <div class="form-group float-label-control">
                    <label for="number">Phone Number:</label>
                    <input type="tel" class="form-control" id="phoneno" name="phoneno">
                </div>

                <div>
                    <label for="request">Requests/additional info:</label>
                <textarea class="form-control" id="requests" name="requests" rows="5"></textarea>
                    </div>
                <div>
                <label for="payment">Payment Method:</label>
                    <select class="form-control" name="payment">
                    <option>Paypal</option>
                     <option>Pay on Arrival</option>
                    </select>
                    </div>
                    <br>
                <div class="form-group" align="center">
                    <button style="cursor:pointer" type="submit" class="btn btn-success">Continue</button>
                </div>
               
            </form>
        <td>
    <tr>
</table>