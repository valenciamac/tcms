<div class="col-md-9" >
   <h2>View Payroll List</h2>
     <form class="form-inline" action="monthly" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control"  type="text" id="searchmonth" placeholder="search" name="search">
        </div>
      </div> 
</form>
@foreach($peep as $limot)
    <ul class="nav nav-pills">
        <li>
        <a href="{{$limot->paydate}}/defencereport">
        <i class="fa fa-print">            
        </i>
        Download PDF
        </a>
        </li>
    </ul>
@endforeach
<table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Employee Name</th>
            <th>Employee Lname</th>
            <th>Philhealth Contribution</th>
            <th>Paydate</th>
            <th>Pagibig Contribution</th>
            <th>Sss Contribution</th>
            <th>Gross</th>
            <th>Income</th>
            </tr>
            </thead>
            <tbody id="month">
            <?php
        		$all = 0;
        	?>
            @foreach($payroll as $tri)
            <tr class="contents">
            <td>{{$tri->employee->id}}</td>
            <td>{{$tri->employee->fname}}</td>
            <td>{{$tri->employee->lname}}</td>
            <td>{{$tri->phcont}}</td>
            <td>{{$tri->paydate}}</td>
            <td>{{$tri->pgibigcont}}</td>
            <td>{{$tri->ssscont}}</td>
            <td>{{$tri->gross}}</td>
            <td>{{$tri->income}}</td>
            <?php
            $allinall =$tri->income;

            $plus = $all+$allinall;
            $all = $plus;
            ?>
            </tr>
            @endforeach
         @if ($payroll->count())
   		 <td colspan="7"></td>
         <td class="row" colspan="2">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
      
           Php {{$plus}}
         
         </div>
         </td>
            
            @endif
               </tbody>
        </table>


</div>
</div>
</div>
</div>