 @extends('layout.masters')
 <br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
    <hr>
     <form action="update" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">

        <label for="title">From:</label>
        <input type="text" value="{{$transfer->from}}" class="form-control" id="taskTitle"  name="from" >
      </div>
      <div class="form-group">
       <label for="title">To:</label>
        <input type="text" value="{{$transfer->to}}" class="form-control" id="taskTitle"  name="to" >
      </div>
      <label for="title">Date:</label>
        <input type="date" value="{{$transfer->date}}" class="form-control" id="taskTitle"  name="date" >
        <label for="title">Return:</label>
        <input type="date" value="{{$transfer->return}}" class="form-control" id="taskTitle"  name="return" >
        <label for="title">Passengers:</label>
        <input type="text" value="{{$transfer->passengers}}" class="form-control" id="taskTitle"  name="passengers" >
        <label for="title">Luggage:</label>
        <input type="text" value="{{$transfer->luggage}}" class="form-control" id="taskTitle"  name="luggage" >
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
      <td>
    <tr>
</table>