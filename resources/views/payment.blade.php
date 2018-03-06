@extends('layout.masters')

<div align="center">
	<br/><br/><br/><br/><br/><br/>
	<h2> Complete booking</h2>
	<h2>Select most preferred payment method:</h2>
	<ul>
	Pay with Paypal

	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="GL6TG4BXESB4Y">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>
	<br>
	<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Pay On Arrival <br> Full amount:$30</button>
	<br>
	<br>
	<div align="right">
	<a  href="/homepage">HEAD BACK TO THE HOMEPAGE<i class="fa fa-arrow-right"></i></a>
	</div>
<br>
<br>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <h4>Thank for choosing King Transfers. <br>
          King Transfers has been notified that you are paying on arrival</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</div>