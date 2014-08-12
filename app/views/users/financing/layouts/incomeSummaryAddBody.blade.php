<div class="col-md-9">
   <div ng-app ng-controller="IncomeSummaryAddController">
   <!-- content here -->
   <div class="panel-group" id="accordion">
      <ul class="nav nav-tabs nav-justified">
         <li><a href="incomeSummary">View Income Summary</a></li>
         <li class="active"><a href="incomeSummaryAddBody">Add New Contract</a></li>
      </ul>
        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#addContract">
          Add Contract (Details)
        </a>
    <div id="addContract" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
        <form ng-submit="addContract()" method="Post" class="form-inline" role="form">
      <div class="row">
         <div class="col-xs-6">
            <label>Contract Title: </label>
            <input type="text" ng-model="contractTitle" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income January:</label>
            <input type="text" ng-model="incomeJanuary" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income February:</label>
            <input type="text" ng-model="incomeFebruary" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income March:</label>
            <input type="text" ng-model="incomeMarch" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income April:</label>
            <input type="text" ng-model="incomeApril" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income May:</label>
            <input type="text" ng-model="incomeMay" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income June:</label>
            <input type="text" ng-model="incomeJune" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income July:</label>
            <input type="text" ng-model="incomeJuly" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income August:</label>
            <input type="text" ng-model="incomeAugust" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income September:</label>
            <input type="text" ng-model="incomeSeptember" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income October:</label>
            <input type="text" ng-model="incomeOctober" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income November:</label>
            <input type="text" ng-model="incomeNovember" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income December:</label>
            <input type="text" ng-model="incomeDecember" class="form-control input-sm">
         </div>
      </div>
      <!-- button -->
      <div class="submit pull-right">
         <button class="btn btn-primary" type="submit">Save</button>
      </div>
      </form>
      </div><!--tab-pane-->
      
</div>

<hr>
      </div> <!-- collapsible -->
</div>
</div>
</div>
</div>