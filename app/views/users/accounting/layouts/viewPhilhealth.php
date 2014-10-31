 <div ng-app ng-controller="PhilhealthController">
   <!-- content here -->
   <form class="form-inline" action="phcontr" role="form">
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
              <th>Salary Bracket</th>
              <th>Salary Range Min</th>
              <th>Salary Range Max</th>
              <th>Salary Base</th>
              <th>Total Monthly Premium</th>
              <th>Employer Share</th>
              <th>Employee Share</th>
              <th>Option</th>
              
            </tr>
          </thead>
         <tr ng-repeat="phcontr in phcontr | filter:search" class="contents">
                <td>{{ phcontr.id }}</td>
                <td>{{ phcontr.salbracket }}</td>
                <td>{{ phcontr.salmin }}</td>
                <td>{{ phcontr.salmax }}</td>
                <td>{{ phcontr.salbase }}</td>
                <td>{{ phcontr.tmp }}</td>
                <td>{{ phcontr.empershare }}</td>
                <td>{{ phcontr.empeeshare }}</td>
                <td><a href="phcontr/{{phcontr.id}}"  class="btn btn-primary btn-full-width" ><i class="fa fa-pencil-square-o">Edit PhContr</i></a>
                     <a href="phcontr/{{phcontr.id}}/delete"  class="btn btn-primary btn-full-width"><i class="fa fa-trash-o">Delete Phcontr</i></a></td>
            </tr>

          </tbody>
        </table>

</div>
</div>
</div>
</div>