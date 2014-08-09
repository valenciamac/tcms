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

    <h2>Hourly Rates</h2>           

    
        <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>Id</th>
              <th>hours Rate(Rest/Special)</th>
              <th>hours Rate(Special)</th>
              <th>hours Rate(Regular)</th>
              <th>hours Rate(Rest/Regular)</th>
              <th>Option</th>
            </tr>
          </thead>
        @foreach ($hoursrate as $hours)
            
             <tr>
                <td>{{ $hours->id }}</td>
                <td>{{ $hours->resthour }}</td>
                <td>{{ $hours->specialhour}}</td>
                <td>{{ $hours->reghour}}</td>
                <td>{{ $hours->resthold}}</td>
                <td><a href="hours/{{$hours->id}}"><i class="fa fa-pencil-square-o"></i></a>
                  <a href="hours/{{$hours->id}}/delete"><i class="fa fa-trash-o"></i></a></td>

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