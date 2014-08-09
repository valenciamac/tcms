<div class="col-md-9">
  <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="viewpay">Payroll - Office</a></li>
      <li><a href="viewpay2">Payroll - Worksite</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Total Salary<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
      <ul class="dropdown-menu" role="menu">
           <li><a href="#">Total Salary - Office</a></li>
           <li class="divider"></li>
           <li><a href="#">Total Salary - Worksite</a></li>
    </ul>
    </li>
  </ul>
	

  <h2>Payroll - Office</h2>           
        <!-- content here -->
        <form class="form-inline" action="viewpay" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="Search" name="search">
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
              <th>Home Address</th>
              <th>Basic Income</th>
              <th>Rate</th>
              <th>Status</th>
              <th>Dependent</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
           
            @foreach ($employee as $emp1)
            
             <tr>
                <td>{{ $emp1->id }}</td>
                <td>{{ ucwords($emp1->department) }}</td>
                <td>{{ ucwords($emp1->position) }}</td>
                <td>{{ ucwords($emp1->fname) }}</td>
                <td>{{ ucwords($emp1->mname) }}</td>
                <td>{{ ucwords($emp1->lname) }}</td>
                <td>{{ $emp1->address }}</td>
                <td>{{ $emp1->basic }}</td>
                <td>{{ $emp1->rate }}</td>
                <td>{{ $emp1->status }}</td>
                <td>{{ $emp1->dependent }}</td>
                <td><a href="{{$emp1->id}}"><i class="fa fa-plus-square-o"></i></a></td>
            </tr>
            
            @endforeach

          </tbody>
        </table>

            </div>
        </div> 
    </div>
</div>