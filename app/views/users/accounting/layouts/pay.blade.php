<div class="col-md-9">
   <ul class="nav nav-pills">
      <li class="active"><a href="employ">Add Employee</a></li>
      <li><a href="employ2">View Employee Details</a></li>
   </ul>
   <h2>View Employee Details</h2>
   <!-- content here -->
   <form class="form-inline" action="employ2" role="form">
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
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Rate</th>
            <th>Days</th>
            <th>Basic Income</th>
            <th>Option</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($employee as $emp)
         <tr>
            <td>{{ $emp->id }}</td>
            <td>{{ ucwords($emp->department) }}</td>
            <td>{{ ucwords($emp->position) }}</td>
            <td>{{ ucwords($emp->fname) }}</td>
            <td>{{ ucwords($emp->mname) }}</td>
            <td>{{ ucwords($emp->lname) }}</td>
            <td>{{ $emp->rate }}</td>
            <td>{{ $emp->days }}</td>
            <td>{{ $emp->basic }}</td>
            <td><a href="{{$emp->id}}"><i class="fa fa-pencil-square-o"></i></a>
               <a href="{{$emp->id}}/delete"><i class="fa fa-trash-o"></i></a> 
         </tr>
         @endforeach
      </tbody>
   </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>