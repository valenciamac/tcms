   <div class="panel-group" id="accordion">
      <a class="btn btn-primary" href="purchases">Purchases</a>
      <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#unpaid">Unpaid Purchases</a>
      <a class="btn btn-primary" href="payable">Payables to Suppliers</a>
      <a class="btn btn-primary" href="unrel">Unrelased Checks for Suppliers</a>
    </div>

     <form class="form-inline" action="purchases" role="form">
      <div class="form-group" >
      </div>
         <div class="row">
            @foreach($po as $unpaid)
            <div class="col-md-3">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th class="th">{{ucwords($unpaid->project->project_name)}}</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $summary = 0;
                     ?>
                     @foreach ($unpaid->item as $item)
                     <tr>
                     <div class="row">
                      <?php
                      $total =  $item->qty * $item->price;

                       $sum = $summary+$total;
                       $summary = $sum;
                      ?>
                     <td>{{$total}}</td>
                     </div>
                     </tr>
                    @endforeach
                    </tbody>
                    </table>
                    </div>
            @endforeach
            </div>
   </form>
<div class="pull-right" style="margin-bottom:50px;">
    <a href= "{{$summary}}/accunpaidreport" class="btn btn-primary"><i class="fa fa-print"></i> Download PDF </a>
   </div>

</div>
</div>
</div>

