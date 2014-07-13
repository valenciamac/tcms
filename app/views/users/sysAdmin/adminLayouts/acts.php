
<div ng-app ng-controller="ActsController">
		<!-- content here -->

<form class="form-inline" action="accounts" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" ng-model="search" style="margin-bottom:20px;">
        </div>
      </div>
</form> 
	<div id="activities" class="acts">
		    <div class="activity-group" ng-repeat="activity in activities | filter:search" style="margin:3px;">
			  <div class="activity-body">
			    <p><block style="color:orange">{{activity.user.fname}}&nbsp;{{activity.user.lname}}</block>&nbsp;
			    {{activity.action}} {{activity.identifier}}

			    </p>
			  </div>
			</div>
	</div>
</div>