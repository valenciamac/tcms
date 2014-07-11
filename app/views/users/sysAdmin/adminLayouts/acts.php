
<div ng-app ng-controller="ActsController">
		<!-- content here -->

<form class="form-inline" action="accounts" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" ng-model="search">
        </div>
      </div>

      
</form> 
		    <div class="panel panel-default" ng-repeat="activity in activities | filter:search">
			  <div class="panel-body">
			    {{activity.user.fname}}&nbsp;{{activity.user.lname}}<br>
			    {{activity.action}}
			  </div>
			</div>
</div>
