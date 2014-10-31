         <div ng-app ng-controller="AstigController">
               <!-- content here -->
               <form class="form-inline" action="accounts" role="form">
                  <div class="form-group ok" >
                     <div class="main-search">
                        <input class="form-control " type="text" placeholder="search" ng-model="search">
                     </div>
                  </div>
               </form>
               <div class="actsContainer">
               <div id="activities" class="acts">
                  <div class="activity-group" ng-repeat="activity in activities | filter:search">
                     <div class="activity-body">
                        <p>
                           <block style="color:orange">{{activity.user.fname}}&nbsp;{{activity.user.lname}}</block>
                           &nbsp;
                           {{activity.action}} {{activity.identifier}} on {{millisToUTCDate(activity.created_at) | date: 'longDate'}}
                        </p>
                     </div>
                  </div>
               </div>
               </div>
            </div>