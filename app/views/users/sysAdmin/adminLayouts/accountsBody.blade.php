<div class="col-md-9">
				
		<!-- content here -->
<form class="form-inline" action="accounts" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" name="search">
        </div>
      </div>

      
</form> 
<a href="accounts" class="btn btn-success">Show All</a>

		@if ($users->count())
		<table class="table table-bordered table-hover" style="font-size:13px;">
	      <thead>
	        <tr>
	          <th>Id</th>
	          <th>First Name</th>
	          <th>Last Name</th>
	          <th>Username</th>
	          <th>Role</th>
	          <th>options</th>
	        </tr>
	      </thead>
	      <tbody>
	       
	        @foreach ($users as $accounts)
	        
	         <tr>
	        	<td>{{ $accounts->id }}</td>
	            <td>{{ ucwords($accounts->fname) }}</td>
		        <td>{{ ucwords($accounts->lname) }}</td>
		        <td>{{ $accounts->username }}</td>
		        <td>{{ $accounts->role }}</td>
		        <td><a href="accounts/{{$accounts->id}}"><i class="fa fa-pencil-square-o"></i></a>
		        	<a href="accounts/{{$accounts->id}}/delete"><i class="fa fa-trash-o"></i></a>
		        </td>
	        </tr>
	        
	        @endforeach

	        
	      </tbody>
	    </table>
	    <center>
	    	{{ $users->links() }}
	    </center>
	    
	    @else
	    <h1>No results</h1>
	    @endif



			</div>
		</div>
		
	</div>
</div>