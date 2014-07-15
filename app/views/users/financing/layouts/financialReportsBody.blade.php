<div class="col-md-9">
				
		<!-- content here -->
		<form class="form-inline" action="financialReports" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" name="search">
        </div>
      </div>
</form>
		<br/>
		<table class="table table-bordered table-hover" style="font-size:10px;">
	      <thead>
	        <tr>
	          <th>ID</th>
	          <th>Client Name</th>
	          <th>Project Title</th>
	          <th>Project Budget</th>
	          <th>Total Salary (Site)</th>
	          <th>Total Salary (Office)</th>
	          <th>Total Price of Materials</th>
	          <th>Miscellaneous</th>
	          <th>Total Expenses</th>
	          <th>Total income</th>
	        </tr>
	      </thead>
	      <tbody>
	       
		@foreach ($income as $incomes)
           <tr>
            <td>{{ $incomes->id }}</td>
            <td>{{ ucwords($incomes->clientName) }}</td>
            <td>{{ ucwords($incomes->projectTitle) }}</td>
            <td>{{ $incomes->projectBudget }}</td>
            <td>{{ $incomes->siteSalaryTotal }}</td>  
            <td>{{ $incomes->officeSalaryTotal }}</td> 
            <td>{{ $incomes->priceOfMaterialsTotal }}</td>
            <td>{{ $incomes->misc }}</td>
            <td>{{ $incomes->expensesTotal }}</td> 
            <td>{{ $incomes->incomeTotal }}</td> 
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