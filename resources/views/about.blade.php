@extends('layout.ablayout')

	
<div>

<h3 style="text-align: center;">ABOUT US....</h3>
  <div class="div6">
	 <h4>We are located in Nairobi,Kenya. Our aim is to ensure we provide  safe,<br>
    reliable and affordable transfers from Jomo Kenyatta International Airport and vice  versa for you.We have a fleet of comfortable cars and well trained personel with experience</h4>
    
  </div>

	<img src="{{ asset('images/abimage.png') }}" alt="product" class="img-fluid" width="150" height="100">

	<img class="right" src="{{ asset('images/drivimage.png') }}" alt="product" class="img-fluid"  width="150" height="152">

	<img class="left" src="{{ asset('images/tranimage.png') }}" alt="product" class="img-fluid"  width="150" height="152">


</div>
<br>
<br>
<br>
<div class="jumbotron text-center">
<div class="div10"> <a href="#div3">BOOK BELOW</a></div>
  <div class="div4">
  <h1>arrive comfortably.... </h1>
  </div> 
  <div class="div3">
  <button type="submit" onclick="myFunction()" class="btn btn-primary" style="margin-left: -772px">One-way</button>
<button type="submit" onclick="myFunction2()"  class="btn btn-danger">Return</button>
<br>
   
    <form class="form-inline" action="confirm" method="POST">
  {{ csrf_field() }}
  <div class="form-group" id="form">
     <select required  class="form-control" name="from">
        <option selected>From...</option>
        <option>JKIA</option>
      </select>

  <input type="search" class="form-control" id="to" placeholder="To:" required name="to" >
  </div>
  

  <div class="form-group">
   
    <input type="Date" class="form-control" id="date" placeholder="Date" required name="date">
  </div>
  <div class="form-group">
   
    <input type="Date" class="form-control" id="return" placeholder="Return" required name="return">
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






