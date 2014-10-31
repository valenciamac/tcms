<div ng-app ng-controller="CashVouchersController" class="bottom-pad">
   <!-- content here -->
   <form class="form-inline" action="cashvouchers" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="Search" ng-model="search">
         </div>
      </div>
   </form>
   <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th style="text-align:center;">ID</th>
            <th style="text-align:center;">Check No</th>
            <th style="text-align:center;">Receive From</th>
            <th style="text-align:center;">Receive By</th>
            <th style="text-align:center;">Prepared</th>
            <th style="text-align:center;">Checked</th>
            <th style="text-align:center;">Approved</th>
            <th style="text-align:center;">Date</th>
            <th style="text-align:center;">Options</th>
         </tr>
      </thead>
      <tbody>
         <tr ng-repeat="cashvouchers in cashvouchers | filter:search" class="contents">
            <td>{{cashvouchers.id}}</td>
            <td>{{cashvouchers.checkno}}</td>
            <td>{{cashvouchers.rfrom}}</td>
            <td>{{cashvouchers.rpb}}</td>
            <td>{{cashvouchers.prepared}}</td>
            <td>{{cashvouchers.checked}}</td>
            <td>{{cashvouchers.approved}}</td>
            <td>{{millisToUTCDate(cashvouchers.created_at) | date: 'longDate'}}</td>
            <td><a href="cashitems/{{cashvouchers.checkno}}"><i class="fa fa-plus"></i>&nbsp;Add</a><br>
                <a href="cash/{{cashvouchers.id}}"><i class="fa fa-pencil"></i>&nbsp;Edit</a><br>
                <a href="cashvouchers/{{cashvouchers.id}}/delete"><i class="fa fa-trash-o"></i>Delete</a></td>
            
         </tr>
      </tbody>
   </table>
</div>
<!-- 
<td><a href="cashitems/{{cashvouchers.checkno}}" class="btn btn-success"><i class="fa fa-pencil"></i>Details</a> 
               <a href="cashvouchers/{{cashvouchers.id}}/delete" class="btn btn-danger" ><i class="fa fa-trash-o"></i>delete</a>
               </td> -->