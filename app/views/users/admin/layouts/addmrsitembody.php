<div class="col-md-9">
   <div ng-app ng-controller="addMrsitemController">
   <!-- content here -->
   <form class="form-inline" action="projects" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>
   <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>PO #</th>
            <th>PRS #</th>
            <th>supplier name</th>
            <th>date created</th>
            <th>Options</th>
         </tr>
      </thead>
      <tbody>
         <tr ng-repeat="invitem in invitem | filter:search" class="contents">
            <td>{{project.id}}</td>
            <td>{{proj.prs}}</td>
            <td>{{project.suppler_name}}</td>
            <td>{{millisToUTCDate(project.created_at) | date: 'longDate'}}</td>
            <td><a href="invoice/{{project.project}}" class="btn btn-primary">View Mrs Items</a></td>
        
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