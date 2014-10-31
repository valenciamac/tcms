<div class="panel-group" id="accordion">
   		<a class="btn btn-primary" href="purchases">Purchases</a>
  		<a class="btn btn-primary" href="unpaid">Unpaid Purchases</a>
  		<a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#payable">Payables to Suppliers</a>
  		<a class="btn btn-primary" href="unrel">Unrelased Checks for Suppliers</a>
  	</div>

  	 <form class="form-inline" action="purchases" role="form">
      <div class="form-group" >
      </div>
      <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>PO #</th>
            <th>Date</th>
            <th>Supplier</th>
            <th>Unpaid</th>
            <th>Due Date</th>
         </tr>
      </thead>
      <tbody>
         <tr class="contents">
        <?php
        $summary = 0;
        ?>
        @foreach($po as $pay)
        
          <td>{{$pay->po}}</td>
          <td>{{$pay->created_at}}</td>
          <td>{{$pay->suppler_name}}</td>
          @foreach($pay->item as $item)
          <?php
            $total =  $item->qty * $item->price;
            $tot = $total+$tot;
            $sum = $summary+$total;
            $summary = $sum;
            ?>
            @endforeach
          <td class="peso">{{$total}}</td>
          
          <td>{{$pay->due_date}}</td>
         </tr>
          @endforeach
         <td colspan="3">Total:</td>
         <td class="row">
         <div class="peso">
           Php {{$summary}}
         </div>
         </td>
         <td></td>

      </tbody>
      
   </table>
   </form>
   <div class="pull-right" style="margin-bottom:50px;">
    <a href= "{{$summary}}/payablesAccreport" class="btn btn-primary"><i class="fa fa-print"></i> Download PDF </a>
   </div>
  
</div>
</div>
</div>

