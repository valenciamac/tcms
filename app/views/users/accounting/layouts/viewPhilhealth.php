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
              <th>Salary Range</th>
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
                <td>{{ phcontr.salrange }}</td>
                <td>{{ phcontr.salbase }}</td>
                <td>{{ phcontr.tmp }}</td>
                <td>{{ phcontr.empershare }}</td>
                <td>{{ phcontr.empeeshare }}</td>
                <td><a href="phcontr/{{phcontr.id}}"><i class="fa fa-pencil-square-o"></i></a>
                     <a href="phcontr/{{phcontr.id}}/delete"><i class="fa fa-trash-o"></i></a></td>
            </tr>

          </tbody>
        </table>

</div>
</div>
</div>
</div>