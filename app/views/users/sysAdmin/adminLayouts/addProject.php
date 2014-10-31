<div ng-app ng-controller="ProjectsController">
   <form class="form-inline" action="project" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>
   <table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Location</th>
            <th>Date Created</th>
            <th>options</th>
         </tr>
      </thead>
      <tbody>
         <tr ng-repeat="project in projects | filter:search" class="contents">
            <td>{{project.id}}</td>
            <td>{{project.project_name}}</td>
            <td>{{project.location}}</td>
            <td>{{millisToUTCDate(project.created_at) | date: 'longDate'}}</td>
            <td style="margin-right:2px;"><a href="inventory/{{project.id}}" class="btn btn-success addprobtn"><i class="fa fa-pencil"></i>View Inventory</a> 
               <!-- <a href="project/{{project.id}}/delete" class="btn btn-danger"><i class="fa fa-trash-o"></i>delete</a> -->
            </td>
         </tr>
      </tbody>
   </table>
</div>