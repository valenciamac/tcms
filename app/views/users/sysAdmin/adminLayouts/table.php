
<div ng-app ng-controller="UsersController">
		<!-- content here -->

<form ng-submit="adduser()">
	<table class="table table-bordered" style="font-size:13px;">
		      <thead>
		        <tr>
		          <th>First Name</th>
		          <th>Last Name</th>
		          <th>Username</th>
		          <th>Password</th>
		          <th>Role</th>
		        </tr>
		      </thead>
		      <tbody>	    
		         <tr>
		         
		        	<td><input type="text" ng-model="fname" class="form-control"></td>
		        	<td><input type="text" ng-model="lname" class="form-control"></td>
		        	<td><input type="text" ng-model="username" class="form-control"></td>
		        	<td><input type="password" ng-model="password" class="form-control"></td>
		        	<td>
			        	<select ng-model="role" class="form-control" id="role">
		                    <option value="sysAdmin">System Administrator</option>
		                    <option value="accounting">Accounting</option>
		                    <option value="admin">Administrator</option>
		                    <option value="financing">Financing</option>
		                    <option value="purchasing">Purchasing</option>
		                </select>
		        	</td>
		        	
		        </tr>


		        
		      </tbody>
		    </table>
	    <button type="submit" class="btn btn-success pull-right">Add User</button>
</form>
<form class="form-inline" action="accounts" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" ng-model="search">
        </div>
      </div>

      
</form> 
<a href="accounts" class="btn btn-success">Show All</a>
	
		<table class="table table-bordered content" style="font-size:13px;">
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
	         <tr ng-repeat="user in users | filter:search" class="contents">
	        	<td>{{user.id}}</td>
	        	<td>{{user.fname}}</td>
	        	<td>{{user.lname}}</td>
	        	<td>{{user.username}}</td>
	        	<td>{{user.role}}</td>
	        	<td style="margin-right:2px;"><a href="accounts/{{user.id}}" class="btn btn-success"><i class="fa fa-pencil"></i>edit</a> 
	        	<a href="accounts/{{user.id}}/delete" class="btn btn-danger"><i class="fa fa-trash-o"></i>delete</a></td>
	            
	        </tr>

	        
	      </tbody>
	    </table>
	    <input type="hidden" ng-model="id" class="form-control" value="user.id">
</div>

