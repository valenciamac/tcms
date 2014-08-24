<div class="col-md-9">
   <div>
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
        <form action='incomeSummarySubmit' method="get" class="form-inline" role="form">
      <div class="row">
         <div class="col-xs-6">
            <label>Contract Title: </label>
            <input type="text" name="contractTitle" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income January:</label>
            <input type="text" name="incomeJanuary" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income February:</label>
            <input type="text" name="incomeFebruary" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income March:</label>
            <input type="text" name="incomeMarch" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income April:</label>
            <input type="text" name="incomeApril" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income May:</label>
            <input type="text" name="incomeMay" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income June:</label>
            <input type="text" name="incomeJune" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income July:</label>
            <input type="text" name="incomeJuly" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income August:</label>
            <input type="text" name="incomeAugust" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income September:</label>
            <input type="text" name="incomeSeptember" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income October:</label>
            <input type="text" name="incomeOctober" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income November:</label>
            <input type="text" name="incomeNovember" class="form-control input-sm">
         </div>
         <div class="col-xs-6">
            <label>Income December:</label>
            <input type="text" name="incomeDecember" class="form-control input-sm">
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