<div class="col-md-9">
   <!-- content here -->
   <div class="panel-group" id="accordion">
      <ul class="nav nav-tabs nav-justified">
         <li class="active"><a href="incomeSummary">View Income Summary</a></li>
         <li><a href="incomeSummaryAdd">Add New Contract</a></li>
      </ul>
   <form class="form-inline" action="incomeSummary" role="form">
      <div class="form-group" >
         <div class="input-inline">
         <table>
            <tr>
               <td>
                  <input class="form-control" type="text" placeholder="Enter Year" name="search">
               </td>
               <td>
                  <div class = "col-md-9"></div>
               </td>          
               <td>
                  </br>
                  <ul class="nav nav-pills">
                     <li><a href="incomeSummary/printfin"><i class="fa fa-print"></i>Download PDF</a></li>
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
            <th>JANUARY</th>
            <th>FEBRUARY</th>
            <th>MARCH</th>
            <th>APRIL</th>
            <th>MAY</th>
            <th>JUNE</th>
            <th>JULY</th>
            <th>AUGUST</th>
            <th>SEPTEMBER</th>
            <th>OCTOBER</th>
            <th>NOVEMBER</th>
            <th>DECEMBER</th>
            <th>TOTAL</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($chooseYear as $chooseYears)
         <tr>
            <td>{{ $chooseYears->id }}</td>
            <td>{{ ucwords($chooseYears->contractTitle) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeJanuary)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeFebruary)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeMarch)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeApril)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeMay)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeJune)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeJuly)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeAugust)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeSeptember)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeOctober)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeNovember)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeDecember)) }}</td>
            <td>{{ sprintf('%0.2f',($chooseYears->incomeTotal)) }}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <center>
      {{ $chooseYear->links() }}
   </center>
</div>
</div>
</div>
</div>