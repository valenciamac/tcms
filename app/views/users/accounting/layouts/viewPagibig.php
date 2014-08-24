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
              <th>Pagibig Range</th>
              <th>Employee Share</th>
              
            </tr>
          </thead>
          <tr ng-repeat="pagibig in pagibig | filter:search" class="contents">
                <td>{{ pagibig.id }}</td>
                <td>{{ pagibig.pagibigrange }}</td>
                <td>{{ pagibig.share }}</td>
                <td><a href="pagibig/{{pagibig.id}}"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="pagibig/{{pagibig.id}}/delete"><i class="fa fa-trash-o"></i></a></td>

            </tr>


          </tbody>
        </table>

</div>
</div>
</div>
</div>