@extends('layout.ablayout')

<div>
<br>

<h3 style="text-align: center;">ABOUT US....</h3>

<div class="div6">
   <h4>We are located in Nairobi,Kenya. Our aim is to ensure we provide  safe,<br>
    reliable and affordable transfers from Jomo Kenyatta International Airport and vice  versa for you.We have a fleet of comfortable cars and well trained personel with experience</h4>
  </div>
	
  <div class="col-md-12 text-center">
  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">HOW IT WORKS</button>
</div><br/>


</div>
<br>


<div class="jumbotron text-center">
<div class="container-fluid">
  <div class="div4">
  <h1>arrive comfortably.... </h1>
  </div> 
<button type="submit" onclick="myFunction()" class="btn btn-primary">One-way</button>
<button type="submit" onclick="myFunction2()"  class="btn btn-danger">Return</button>
<br>
    <div class="row">
    <div class="col-sm-12 form-group">
    <form class="form-inline" action="confirm" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
     <select required  class="form-control" name="from">
        <option selected>From...</option>
        <option>JKIA</option>
      </select>

  </div>
  <div class="form-group">
  <input type="search" class="form-control" id="to" placeholder="To:" required name="to" >
  </div>

  <div class="form-group">
   
    <input type="date" class="form-control" id="datepicker" placeholder="Date" required name="date">
  </div>
  <div class="form-group">
   
    <input type="date" class="form-control" id="return" placeholder="Return" required name="return">
  </div>
  <div class="form-group">
     <select id="inputState" class="form-control" name="passengers">
        <option selected>Passengers..</option>
        <option>1</option>
         <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
      </select>
  </div>
  <div class="form-group">
     <select id="inputState" class="form-control" name="luggage">
        <option selected>Luggage...</option>
        <option>1</option>
         <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
      </select>
  </div>


  <button type="submit" class="btn btn-success">Search</button>
</form>
</div>
</div>


</div>
<div class="div2"> DIV 2</div>
</div>


<div class="div7">
  <h4>
    We provide private door to door taxi service to and from all major airports in East African Airports. Our airport transfer service is the most comfortable, stress free way to travel from and to the airport.<br>
    We provide additional services for free like booking your hotel and advising the most cost effective options. We pride of top class service, clean and safe, fully insured chauffeur-driven vehicle will be arranged for your airport transfer.<br>
    Our services are from and to the airports we operate in. Our prices are usually cheaper than cabs picked randomly from the airports. We know how often new travelers are charged exorbitant prices and we want to save you all this
  </h4>
</div>
<hr style="height:1px;border:none;color:#333;background-color:#333; width:100%;">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">HOW IT WORKS</h4>
        </div>
        <div style="color:#000000" class="modal-body">
          STEP 1:
          Choose your transfer for your destination.<br>
          
          <br>
          <br>
          STEP 2:
          Book online with us and we will send you your booking details.<br>
         

          <br>
          <br>
          STEP 3:
          We will be waiting on your arrival.<br>
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

