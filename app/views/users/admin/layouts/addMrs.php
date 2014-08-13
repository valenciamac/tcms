<div ng-app ng-controller="MrsController">
   <form class="form-inline" action="mrs" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>
   <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>Mrs Id</th>
            <th>Project Name</th>
            <th>Location</th>
            <th>Date Created</th>
         </tr>
      </thead>
      <tbody>
         <tr ng-repeat="mrs in mrs | filter:search" class="contents">
            <td>{{mrs.mrsno}}</td>
            <td>{{mrs.project.project_name}}</td>
            <td>{{mrs.project.location}}</td>
            <td>{{millisToUTCDate(mrs.created_at) | date: 'longDate'}}</td>
         </tr>
      </tbody>
   </table>
</div>