 <div class="panel-group" id="accordion">
      <a class="btn btn-primary" href="purchases">Purchases</a>
      <a class="btn btn-primary" href="unpaid">Unpaid Purchases</a>
      <a class="btn btn-primary" href="payable">Payables to Suppliers</a>
      <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#uncheck">Unrelased Checks for Suppliers</a>
    </div>
<!-- 
                <label for="fname" class="col-sm-2 control-label" >Select Month:&nbsp;</label>
                <div class="col-sm-5">
                <select name="rfrom" class="form-control" id="month">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
                </select>
                </div> 
 -->
     <form class="form-inline" action="purchases" role="form">
      <div class="form-group" >
      </div>
      <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>Supplier</th>
            <th>Project</th>
            <th>CV #</th>
            <th>CV Date</th>
            <th>Amount</th>
            <th>Due Date</th>
         </tr>
      </thead>
      <tbody>
        <?php
       $summary = 0;
       ?>
             @foreach($checkvouchers as $unrel)
             @foreach($unrel->checkitem as $rel)
             <?php
         $total = 0;
         $total =  $total + $rel->amount;
         $summary =  $total+$summary;
         ?>
             <tr>
             <td>{{$rel->payee}}</td>
             <td>{{$rel->project}}</td>
             <td>{{$rel->checkvouchers_checkno}}</td>
             <td>{{$rel->created_at}}</td>
             <td>{{$rel->amount}}</td>
             <td>{{$rel->checkdate}}</td>
             </tr>
             @endforeach
             @endforeach
              <td><p><b>Total:</b></p></td>
              <td class="row" colspan="4">
              <div class="peso">
                <p><b>Php {{$summary}}</b></p>
              </div>
              </td>
              <td></td>
      </tbody>
      
   </table>
   
   </form>
<div class="pull-right" style="margin-bottom:50px;">
    <a href= "{{$summary}}/accunreleasedreport" class="btn btn-primary"><i class="fa fa-print"></i> Download PDF </a>
   </div>

</div>
</div>
</div>

