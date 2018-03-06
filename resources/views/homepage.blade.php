@extends('layout.masters')


<div class="jumbotron text-center">
<br>
<div class="div1"> DIV 1</div>
<div class="div4" id="rel4">
  <h1 style="text-align: center;">KING TRANSFERS </h1> 
  <p>We specialize in Airport Transfers</p>
</div>
  <div class="div3">
  <button type="submit" onclick="myFunction()" class="btn btn-primary" style="margin-left: -772px">One-way</button>
<button type="submit" onclick="myFunction2()"  class="btn btn-danger">Return</button>
<br>
   
    <form class="form-inline" action="confirm" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
     <select required  class="form-control" name="from">
        <option selected>From...</option>
        <option>JKIA</option>
      </select>

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

<div class="div2"> DIV 2</div>
</div>


 <h2 align="center">What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      @foreach($contacts as $contact)
      <p style="color:#000000">{{$contact->name}}</p>
      <p style="color:#000000">{{$contact->comments}}</p>
      @endforeach
     
      <br>

      </div>
      <div class="item">
         @foreach($contacts as $contact)
      <p style="color:#000000">{{$contact->name}}</p>
      <p style="color:#000000">{{$contact->comments}}</p>
      @endforeach
       
       
      </div>
      <div class="item">
         @foreach($contacts as $contact)
      <p style="color:#000000">{{$contact->name}}</p>
      <p style="color:#000000">{{$contact->comments}}</p>
      @endforeach
      
      </div>
    </div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">COMMENTS</h2>
  <div class="row">
    <div class="col-sm-5">
      <p style="color:#000000">Contact us and we'll get back to you within 24 hours.</p>
      <p style="color:#000000"><span class="glyphicon glyphicon-map-marker"></span> Nairobi, Kenya</p>
      <p style="color:#000000"><span class="glyphicon glyphicon-phone"></span> +254791019910</p>
      <p style="color:#000000"><span class="glyphicon glyphicon-envelope"></span> info@kingcabs.co.ke</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form action="sent" method="POST">
           {{ csrf_field() }}
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
          </form>
        </div>
          <div class="col-md-8 col-md-offset-2">
        @if(Session::has('success'))
             <div class="alert alert-success">
               {{ Session::get('success') }}
             </div>
        @endif
      </div>
    </div>
  </div>