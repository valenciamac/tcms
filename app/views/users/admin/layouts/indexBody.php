<div class="col-md-6">
   <div ng-app ng-controller="PurchasesController">
   <!-- content here -->
   <form class="form-inline" action="purchaseOrder" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>
   <table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>PO #</th>
            <th>supplier name</th>
            <th>date created</th>
            <th>Options</th>
         </tr>
      </thead>
      <tbody>
         <tr ng-repeat="po in pos | filter:search" class="contents">
            <td>{{po.id}}</td>
            <td>{{po.suppler_name}}</td>
            <td>{{millisToUTCDate(po.created_at) | date: 'longDate'}}</td>
            <td><div class="btn-full btn-group">
                 <a href="invoice/{{po.id}}" class="btn btn-default">
                   Add Receipts
                 </a>
               </div>
               </td>
         </tr>
      </tbody>
   </table>
      </div>
   </div>
</div>
</div>
</div>
</div>
</div>