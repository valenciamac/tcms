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
    </li>
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
<h2>Philhealth Contribution Table</h2>           

    <form class="form-inline" action="rates2" role="form">
    <div class="form-group" >
      <div class="input-inline">
        <input class="form-control" type="text" placeholder="Search" name="search">
        </div>
      </div>
    </form>
        
        <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Salary Bracket</th>
              <th>Salary Range</th>
              <th>Salary Base</th>
              <th>Total Monthly Premium</th>
              <th>Employer Share</th>
              <th>Employee Share</th>
              <th>Option</th>
              
            </tr>
          </thead>
        @foreach ($phcontr as $phealth)
            
             <tr>
                <td>{{ $phealth->id }}</td>
                <td>{{ $phealth->salbracket }}</td>
                <td>{{ $phealth->salrange }}</td>
                <td>{{ $phealth->salbase }}</td>
                <td>{{ $phealth->tmp }}</td>
                <td>{{ $phealth->empershare }}</td>
                <td>{{ $phealth->empeeshare }}</td>
                <td><a href="phealth/{{$phealth->id}}"><i class="fa fa-pencil-square-o"></i></a>
                     <a href="phealth/{{$phealth->id}}/delete"><i class="fa fa-trash-o"></i></a></td>
            </tr>
            
            @endforeach

          </tbody>
        </table>

</div>
</div>
</div>
</div>