<div ng-app ng-controller="SalsController">
   <!-- content here -->
   <form class="form-inline" action="payroll()" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control" type="text" placeholder="search" ng-model="search" style="margin-bottom:20px;">
         </div>
      </div>
   </form>
      <ul class="nav nav-pills">
                     <li><a href="salary/payrollreport"><i class="fa fa-print"></i>Download PDF</a></li>
                  </ul>
<table class="table table-bordered content" style="font-size:13px;">
      <thead>
          <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Paydate</th>
            <th>Gross</th>
            <th>Philhealth Contribution</th>
            <th>Pagibig Contribution</th>
            <th>Sss Contribution</th>
            <th>Income</th>
         </tr>

         </thead>
         <tbody>
          <tr ng-repeat="payroll in payroll | filter:search" class="contents">
            <td>{{payroll.employee.id}}</td>
            <td>{{payroll.employee.fname}}</td>
            <td>{{payroll.employee.lname}}</td>
            <td>{{payroll.paydate}}</td>
            <td>{{payroll.gross}}</td>
            <td>{{payroll.phcont}}</td>
            <td>{{payroll.pgibigcont}}</td>
            <td>{{payroll.ssscont}}</td>
            <td>{{payroll.income}}</td>
            </tr>
            </tbody>
            </table>
            

      </div>
   </div>
</div>