 <div ng-app ng-controller="SssController">
   <!-- content here -->
   <form class="form-inline" action="ssscontr" role="form">
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
              <th>Range</th>
              <th>Credit</th>
              <th>SSS Employer Share</th>
              <th>SSS Employee Share</th>
              <th>SS Total</th>
              <th>EC Employer Share</th>
              <th>TC Employer Share</th>
              <th>TC Employee Share</th>
              <th>TC Total</th>
              <th>TC Contribution</th>
              
            </tr>
          </thead>
          <tr ng-repeat="ssscontr in ssscontr | filter:search" class="contents">
                <td>{{ ssscontr.id }}</td>
                <td>{{ ssscontr.range }}</td>
                <td>{{ ssscontr.credit }}</td>
                <td>{{ ssscontr.ssempershare }}</td>
                <td>{{ ssscontr.ssempeeshare }}</td>
                <td>{{ ssscontr.sstotal }}</td>
                <td>{{ ssscontr.ecempershare }}</td>
                <td>{{ ssscontr.tcempershare }}</td>
                <td>{{ ssscontr.tcempeeshare }}</td>
                <td>{{ ssscontr.tctotal }}</td>
                <td>{{ ssscontr.totalcontr }}</td>
                <td><a href="ssscontr/{{ssscontr.id}}"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="ssscontr/{{ssscontr.id}}/delete"><i class="fa fa-trash-o"></i></a></td>

            </tr>


          </tbody>
        </table>

</div>
</div>
</div>
</div>