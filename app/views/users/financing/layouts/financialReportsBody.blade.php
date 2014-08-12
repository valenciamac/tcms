<div class="col-md-9">
   <!-- content here -->
   <form class="form-inline" action="financialReports" role="form">
      <div class="form-group" >
         <div class="input-inline">
         <table>
            <tr>
               <td>
                  <input class="form-control" type="text" placeholder="Search Contract" name="search">
               </td>
               <td>
                  <div class = "col-md-9"></div>
               </td>          
               <td>
                  </br>
                  <ul class="nav nav-pills">
                     <li><a href="financialReports/printfin"><i class="fa fa-print"></i>Download PDF</a></li>
                  </ul>
                  <!-- <ul class="nav nav-pills">
                     <li><a href="financialReports/printfin"><i class="fa fa-print"></i>Download PDF</a></li>
                  </ul> -->
               </td>
            </tr>
         </table>
         </div>
         <div>
            
         </div>
      </div>
   </form>
   <table class="table table-bordered table-hover" style="font-size:10px;">
      <thead>
         <tr>
            <th>NO.</th>
            <th>CONTRACT TITLE</th>
            <th>INCOME FROM CONTRACT</th>
            <th>PURCHASES COST</th>
            <th>SUB-CON COST</th>
            <th>INHOUSE COST</th>
            <th>TRUCKING COST</th>
            <th>FORMWORKS COST</th>
            <th>MONTHLY SALARY</th>
            <th>WEEKY SALARY</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($income as $incomes)
         <tr>
            <td>{{ $incomes->rNo }}</td>
            <td>{{ ucwords($incomes->contractTitle) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->contractIncome)) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->contractPurchase)) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->contractSubcon)) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->contractInhouse)) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->contractTrucking)) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->contractFormworks)) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->salaryMonthly)) }}</td>
            <td>{{ sprintf('%0.2f',($incomes->salaryWeekly)) }}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <center>
      {{ $income->links() }}
   </center>
</div>
</div>
</div>
</div>