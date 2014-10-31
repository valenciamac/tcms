 <div ng-app ng-controller="PagibigController">
   <!-- content here -->
   <form class="form-inline" action="pagibig" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>  
        
        <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Pagibig Min</th>
              <th>Pagibig Max</th>
              <th>Employee Share</th>
              <th>Option</th>
              
            </tr>
          </thead>
          <tr ng-repeat="pagibig in pagibig | filter:search" class="contents">
                <td>{{ pagibig.id }}</td>
                <td>{{ pagibig.pagibigmin }}</td>
                <td>{{ pagibig.pagibigmax }}</td>
                <td>{{ pagibig.employeeshare }}</td>
                <td><a href="pagibig/{{pagibig.id}}" class="btn btn-primary btn-full-width"><i class="fa fa-pencil-square-o">Edit Pagibig</i></a>
                    <a href="pagibig/{{pagibig.id}}/delete"  class="btn btn-primary btn-full-width"><i class="fa fa-trash-o">Delete Pagibig</i></a></td>

            </tr>


          </tbody>
        </table>
