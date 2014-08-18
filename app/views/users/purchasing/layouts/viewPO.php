<div ng-app ng-controller="PosController" class="bottom-pad">
   <!-- content here -->
   <form class="form-inline" action="purchaseOrder" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>
   <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>Id</th>
            <th>PO #</th>
            <th>PRS #</th>
            <th>supplier name</th>
            <th>date created</th>
            <th>options</th>
         </tr>
      </thead>
      <tbody>
         <tr ng-repeat="po in pos | filter:search" class="contents">
            <td>{{po.id}}</td>
            <td>{{po.po}}</td>
            <td>{{po.prs}}</td>
            <td>{{po.suppler_name}}</td>
            <td>{{millisToUTCDate(po.created_at) | date: 'longDate'}}</td>
            <td><a href="item/{{po.po}}" class="btn btn-success"><i class="fa fa-pencil"></i>Details</a> 
               <a href="purchaseOrder/{{po.id}}/delete" class="btn btn-danger" ><i class="fa fa-trash-o"></i>delete</a>
               </td>
         </tr>
      </tbody>
   </table>
</div>