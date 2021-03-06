<div class="col-md-9" >
   <div ng-app ng-controller="UsersController" class="bottom-pad">
   <!-- content here -->
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#adduser">
          Add New User
        </a>
    <div id="adduser" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
         <form ng-submit="adduser()" method="Post" class="form-inline" role="form">
            <div class="form-group">
             <input type="text" ng-model="fname" class="form-control" placeholder="First Name">
           </div>
            <div class="form-group">
             <input type="text" ng-model="lname" class="form-control" placeholder="Last Name">
           </div>
            <div class="form-group">
             <input type="text" ng-model="username" class="form-control" placeholder="Username">
           </div>
            <div class="form-group">
             <input type="password" ng-model="password" class="form-control" placeholder="Password">
           </div>
            <div class="form-group">
             <select ng-model="role" required="required"
				  ng-options="option.value as option.name for option in roleOptions" class="form-control" >
				    <option style="display:none" value="">select a role</option>
				</select>
           </div>
           <div class="submit">
            <button type="submit" class="btn btn-success pull-right">Add User</button>
            </div>
         </form>

         </div>
         </div><hr>
         </div>
   <form class="form-inline" action="accounts" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>
   <table class="table table-striped content" style="font-size:13px;">
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
            <td style="margin-right:2px;"><a href="accounts/{{user.id}}" class="btn btn-success"><i class="fa fa-pencil link"></i>edit</a> 
               <a href="accounts/{{user.id}}/delete" class="btn btn-danger"><i class="fa fa-trash-o link"></i>delete</a>
            </td>
         </tr>
      </tbody>
   </table>
</div>
</div>
</div>
</div>
</div>