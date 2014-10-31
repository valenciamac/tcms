 <div ng-app ng-controller="SahodController">
   <!-- content here -->
   <form class="form-inline" action="rate" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="search" ng-model="search">
         </div>
      </div>
   </form>    

    
        <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>Id</th>
              <th>OT Rate</th>
              <th>OT Rate(Rest/Special)</th>
              <th>OT Rate(Special)</th>
              <th>OT Rate(Regular)</th>
              <th>OT Rate(Rest/Regular)</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
        <tr ng-repeat="rate in rate | filter:search" class="contents">
                <td>{{ rate.id }}</td>
                <td>{{ rate.otpayrate }}</td>
                <td>{{ rate.otrestnspecholdrate }}</td>
                <td>{{ rate.otrestspecholdrate }}</td>
                <td>{{ rate.otregholdrate }}</td>
                <td>{{ rate.otrestonreghold }}</td>
                <td><a href="rates/{{rate.id}}" class="btn btn-primary btn-full-width"><i class="fa fa-pencil-square-o"> Edit Rate</i> </a>
                  <a href="rates/{{rate.id}}/delete" class="btn btn-primary btn-full-width"><i class="fa fa-trash-o"> Delete Rate </i> </a></td>
          </tr>

          </tbody>
        </table>
      </div>


</div>
</div>
</div>
</div>