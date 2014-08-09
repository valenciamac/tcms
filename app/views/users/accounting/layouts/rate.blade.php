<div class="col-md-9">
    <ul class="nav nav-tabs nav-justified">
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesb">Overtime Rates<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratesb">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="rates">Change Rates</a></li>
    </ul>
    </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesc">Hourly Rates<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratesc">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="ratesd">Change Rates</a></li>
    </ul>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesc">PhilHealth Contribution<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratese">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="rates2">Change Rates</a></li>
    </ul>
    </li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesc">SSS Contribution<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratesg">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="rates3">Change Rates</a></li>
    </ul>
    </li>

<form class ="form-horizontal" role="form">
  <div class="form-horizontal" style="padding-top:40px;">

    <h2>Overtime Rates</h2>           

    
        <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>Id</th>
              <th>OT Rate</th>
              <th>OT Rate(Rest/Special)</th>
              <th>OT Rate(Special)</th>
              <th>OT Rate(Regular)</th>
              <th>OT Rate(Rest/Regular)</th>
              <th>Option</th>
            </tr>
          </thead>
        @foreach ($rate as $rat)
            
             <tr>
                <td>{{ $rat->id }}</td>
                <td>{{ $rat->otpayrate }}</td>
                <td>{{ $rat->otrestnspecholdrate }}</td>
                <td>{{ $rat->otrestspecholdrate }}</td>
                <td>{{ $rat->otregholdrate }}</td>
                <td>{{ $rat->otrestonreghold }}</td>
                <td><a href="rat/{{$rat->id}}"><i class="fa fa-pencil-square-o"></i></a>
                  <a href="rat/{{$rat->id}}/delete"><i class="fa fa-trash-o"></i></a></td>

            </tr>
            
            @endforeach

          </tbody>
        </table>
      </div>
    </form>


</div>
</div>
</div>
</div>