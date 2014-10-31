
  <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="viewpay">Payroll - Office</a></li>
      <li><a href="viewpay2">Payroll - Worksite</a></li>
  </ul>
	

  <h2>Payroll - Office</h2>           
        <!-- content here -->
        <form class="form-inline" action="viewpay" role="form">
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
              <th>Rate</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody id="payroll">
           
            @foreach ($employee as $pay)
            
             <tr>
                <td>{{ $pay->id }}</td>
                <td>{{ ucwords($pay->department) }}</td>
                <td>{{ ucwords($pay->position) }}</td>
                <td>{{ ucwords($pay->fname) }}</td>
                <td>{{ ucwords($pay->mname) }}</td>
                <td>{{ ucwords($pay->lname) }}</td>
                <td>{{ $pay->rate }}</td>
                <td><a href="pay/{{$pay->id}}" class="btn btn-primary btn-full-width">Add Payroll Details</i></a>
                <a href="sep/{{$pay->id}}" class="btn btn-primary btn-full-width">Separation Pay</i></a></td>
                
            </tr>
            
            @endforeach

          </tbody>
        </table>
