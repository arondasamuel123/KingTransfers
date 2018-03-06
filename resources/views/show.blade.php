@extends('layout.masters')

<div class="jumbotron text-center">
        
        <table width="50%" height="50%" border="0" align="center">
            <tr>
                <td align="center" bgcolor="white" colspan="4">
                    <h2><strong>Please confirm your transfer details</strong></h2>
                </td>

            <tr><td width="25%"></td>
                <td align="left" style="color:#ffffff"><br/>
                    From:<br/> 
                    To: <br/>
                    Date:<br/>
                    Return:<br/>
                    Passengers:<br/>
                    Luggage:<br/>
                    Price:<br/>
                </td>
                <td align="left" style="color:#ffffff"><br/>
                    {{ $transfer->from }}<br/>
                    {{ $transfer->to }}<br/>
                    {{ $transfer->date }}<br/>
                    {{ $transfer->return }}<br/>
                    {{ $transfer->passengers }}<br/>
                    {{ $transfer->luggage}}<br/>
                    $30
                </td><td width="25%"></td>
            </tr>
            <tr><td width="25%" colspan="1"></td>
                <td align="left" colspan="1"> <br/>       
                    <a class="btn btn-small btn-primary" href="{{ url ('/edit') }}">Edit Transfer</a>
                </td>
                <td align="ceneter" ccolspan="1"><br/>
                    <a class="btn btn-small btn-success" href="{{ url('/flight') }}">Continue</a>
                </td><td width="25%" colspan="1"></td>
            </tr>
        </table>   
               

                

        
        
    </div>

</div>
