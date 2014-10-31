
	<ul class="nav nav-tabs nav-justified">
  		<li><a href="viewpay">Payroll - Office</a></li>
  		<li class="active"><a href="viewpay2">Payroll - Worksite</a></li>
  </ul>

	<h2>Payroll - Worksite</h2>           
        <!-- content here -->
        <form class="form-inline" action="viewpay2" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" id="searchpayroll" placeholder="Search" name="search">
        </div>
      </div>
</form>
        <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
               <th>Id</th>
              <th>Department</th>
              <th>Position</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Basic Income</th>
              <th>Rate</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody id="payroll">
           
            @foreach ($employee as $emp2)
            
             <tr>
                <td>{{ $emp2->id }}</td>
                <td>{{ ucwords($emp2->department) }}</td>
                <td>{{ ucwords($emp2->position) }}</td>
                <td>{{ ucwords($emp2->fname) }}</td>
                <td>{{ ucwords($emp2->mname) }}</td>
                <td>{{ ucwords($emp2->lname) }}</td>
                <td>{{ $emp2->basic }}</td>
                <td>{{ $emp2->rate }}</td>
                <td><a href="pay/{{$emp2->id}}" class="btn btn-primary btn-full-width">Add Payroll Details</a>
                <a href="sep/{{$emp2->id}}" class="btn btn-primary btn-full-width">Separation Pay</i></a></td>
               
            </tr>
            
            @endforeach

          </tbody>
        </table>
