<div ng-app ng-controller="UsersController">
		<!-- content here -->
<form class="form-inline" action="accounts" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" ng-model="search">
        </div>
      </div>

      
</form> 
<a href="accounts" class="btn btn-success">Show All</a>

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
	         <tr ng-repeat="user in users | filter:search">
	        	<td>{{user.id}}</td>
	        	<td>{{user.fname}}</td>
	        	<td>{{user.lname}}</td>
	        	<td>{{user.username}}</td>
	        	<td>{{user.role}}</td>
	        	<td><a href="accounts/{{user.id}}"><i class="fa fa-pencil"></i></a> 
	        	<a href="accounts/{{user.id}}/delete"><i class="fa fa-trash"></i></a> </td>
	            
	        </tr>

	        
	      </tbody>
	    </table>
</div>