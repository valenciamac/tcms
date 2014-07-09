<div class="col-md-9">

<ul class="nav nav-pills">
  <li><a href="employeeBody">Home</a></li>
  <li><a href="addEmployee">Add Employee</a></li>
  <li class="active"><a href="viewEmployee">View Employee Details</a></li>
  <li><a href="updateEmployee">Update Employee Details</a></li>
</ul>	
<form class="form-inline" action="viewEmployee" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" name="search">
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
	          <th>Last Name</th>
	          <th>Rate</th>
	        </tr>
	      </thead>
	      <tbody>
	       
	        @foreach ($employee as $emp)
	        
	         <tr>
	         	<td>{{ $emp->id }}</td>
	         	<td>{{ ucwords($emp->department) }}</td>
				<td>{{ ucwords($emp->position) }}</td>
	            <td>{{ ucwords($emp->fname) }}</td>
		        <td>{{ ucwords($emp->lname) }}</td>
		        <td>{{ $emp->rate }}</td> 
	        </tr>
	        
	        @endforeach

	      </tbody>
	    </table>
</div>
</div>
</div>
</div>