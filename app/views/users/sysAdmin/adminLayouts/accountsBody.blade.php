<div class="col-md-9">
				
		<!-- content here -->
		<form class="form-inline" action="accounts" role="form">
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
	          <th>First Name</th>
	          <th>Last Name</th>
	          <th>Username</th>
	          <th>Role</th>
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
	        </tr>
	        
	        @endforeach

	        
	      </tbody>
	    </table>




			</div>
		</div>
		
	</div>
</div>