         <div ng-controller="ActsController">
               <!-- content here -->
               <div class="actsContainer">
               <div id="activities" class="acts">
                  <div class="activity-group" ng-repeat="activity in activities">
                     <div class="activity-body">
                        <p>
                           <block style="color:orange; font-size:11px;">{{activity.user.fname}}&nbsp;{{activity.user.lname}}</block>
                           &nbsp;
                           {{activity.action}} {{activity.identifier}} on {{millisToUTCDate(activity.created_at) | date: 'longDate'}}
                        </p>
                     </div>
                  </div>
               </div>
               </div>
            </div>