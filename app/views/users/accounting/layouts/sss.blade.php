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
<h2>SSS Contribution Table</h2>           

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
              <th>Range</th>
              <th>Credit</th>
              <th>SSS Employer Share</th>
              <th>SSS Employee Share</th>
              <th>SS Total</th>
              <th>EC Employer Share</th>
              <th>TC Employer Share</th>
              <th>TC Employee Share</th>
              <th>TC Total</th>
              <th>TC Contribution</th>
              
            </tr>
          </thead>
        @foreach ($ssscontr as $ssscont)
            
             <tr>
                <td>{{ $ssscont->id }}</td>
                <td>{{ $ssscont->range }}</td>
                <td>{{ $ssscont->credit }}</td>
                <td>{{ $ssscont->ssempershare }}</td>
                <td>{{ $ssscont->ssempeeshare }}</td>
                <td>{{ $ssscont->sstotal }}</td>
                <td>{{ $ssscont->ecempershare }}</td>
                <td>{{ $ssscont->tcempershare }}</td>
                <td>{{ $ssscont->tcempeeshare }}</td>
                <td>{{ $ssscont->tctotal }}</td>
                <td>{{ $ssscont->totalcontr }}</td>
                <td><a href="ssscont/{{$ssscont->id}}"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="ssscont/{{$ssscont->id}}/delete"><i class="fa fa-trash-o"></i></a></td>

            </tr>
            
            @endforeach

          </tbody>
        </table>

</div>
</div>
</div>
</div>