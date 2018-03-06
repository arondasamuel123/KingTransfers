
<!DOCTYPE html>
<html>
<head>
	<title>King Cabs Transfers Invoice</title>

<div class="invoice-title">
    			<h2>Booking details</h2><h3 class="pull-right"></h3>
    		
    		</div>


</head>
<hr>
<body>

    		<div>
    				
    				@foreach($user->transfers as $transfer)
    				<strong>Passenger(s):</strong>{{$transfer->user->name}}<br>
    				<br>
    				<strong>From:</strong>{{$transfer->from}}<br>
    				<strong>To:</strong>{{$transfer->to}}<br>
    				<strong>Date of Arrival:</strong>{{$transfer->date}}<br>
    				<strong>Date of Return:</strong>{{$transfer->return}}
    				@endforeach     

    			</div>
    			<hr>
    			@foreach($transfer->flights as $flight)
    			<strong>Flight arrival time</strong>:{{$flight->arrivaltime}}<br>
    			
    			<strong>Number to contact</strong>:{{$flight->phoneno}}<br>
    			<strong>Airline Name</strong>:{{$flight->airname}}<br>
    			<strong>Flight Number</strong>:{{$flight->flightno}}<br>
    			<strong>Additional information</strong>:{{$flight->requests}}<br>
                <strong>Payment method</strong>:{{$flight->payment}}<br>
				@endforeach


</body>
<hr>
<h3><strong>THANK YOU FOR TRAVELING WITH KING TRANSFERS. WE HOPE TO HEAR FROM YOU SOON!!!</strong></h3>

Regards,<br>
Kevin Kinge<br>
+254733674356<br>
Operations,King Cabs and Travels
</html>
