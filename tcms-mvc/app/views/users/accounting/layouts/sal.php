<div ng-app ng-controller="SalsController">
   <!-- content here -->
   <form class="form-inline" action="payroll()" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control" type="text" placeholder="search" ng-model="search" style="margin-bottom:20px;">
         </div>
      </div>
   </form>
   <div id="payroll" class="sals">
      <div class="activity-group" ng-repeat="payroll in payroll | filter:search" style="margin:3px;">
         <div class="activity-body">
            <p>
               <block style="color:orange">{{payroll.employee.fname}}&nbsp;{{payroll.employee.lname}}</block>
               &nbsp;
               {{payroll.income}} {{payroll.paydate}}
            </p>
         </div>
      </div>
   </div>
</div>