<div ng-app ng-controller="CheckVouchersController" class="bottom-pad">
   
   <form class="form-inline" action="checkvouchers" role="form">
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
            <th style="text-align:center;">Received From</th>
            <th style="text-align:center;">Received By</th>
            <th style="text-align:center;">Prepared</th>
            <th style="text-align:center;">Checked</th>
            <th style="text-align:center;">Approved</th>
            <th style="text-align:center;">Date</th>
            <th style="text-align:center;">Options</th>
         </tr>
      </thead>
      <tbody>
         <tr ng-repeat="checkvouchers in checkvouchers | filter:search" class="contents">
            <td>{{checkvouchers.id}}</td>
            <td>{{checkvouchers.checkno}}</td>
            <td>{{checkvouchers.rfrom}}</td>
            <td>{{checkvouchers.rpb}}</td>
            <td>{{checkvouchers.prepared}}</td>
            <td>{{checkvouchers.checked}}</td>
            <td>{{checkvouchers.approved}}</td>
            <td>{{millisToUTCDate(checkvouchers.created_at) | date: 'longDate'}}</td>
             <td><a href="checkitems/{{checkvouchers.checkno}}"><i class="fa fa-plus"></i>&nbsp;Add</a><br>
                 <a href="check/{{checkvouchers.id}}"><i class="fa fa-pencil"></i>&nbsp;Edit</a><br>
                 <a href="checkvouchers/{{checkvouchers.id}}/delete"><i class="fa fa-trash-o"></i>Delete</a></td>
         </tr>
      </tbody>
   </table>
</div>