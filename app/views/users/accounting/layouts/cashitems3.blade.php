

<div class="panel-group" id="accordion">
@foreach($cashvouchers as $vouch)
        <a class="btn btn-primary" href="../cashitems/{{$vouch->checkno}}">Labor</a>
        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#rates">Materials</a>
	      <!-- <a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newacctitle">Add a New Account Title</a> -->
	  <div id="rates" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
      <div class="form-group" style="padding-bottom:45px;">
      
      <div class="row">

            @foreach($po as $purchase)
            <div class="col-md-3">
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th class="th">{{ucwords($purchase->project->project_name)}}</th>
                     </tr>
                  </thead>
                  <tbody>

                     <tr>
                     <td>
                     <div class="row">
                     <div class="col-xs-8">
                     PO #:{{$purchase->po}} <a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newitem{{$purchase->id}}">Details</a>
                   </div>
                     </div>
                     </td>
                     </tr>
                    </tbody>
                    </table>
              </div>

 <div class="modal fade" id="newitem{{$purchase->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
 <h4 class="modal-title" id="myModalLabel">Add Voucher Item</h4>
 </div>
 <div class="modal-body">
 {{Form::open(array('route' => 'cashitems3.store','class'=>'form-horizontal','role'=>'form'))}}
  <input type="hidden" value="{{$vouch->checkno}}" name="cashvouchers_checkno" readonly="readonly">
        <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >No:&nbsp;</label>
        <input name="check" class="form-control" id="payee">
        </div>
        <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Payee:&nbsp;</label>
        <input name="payee" class="form-control" id="payee" value="{{$purchase->suppler_name}}">
        </div>
        <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >PO:&nbsp;</label>
        <input name="po_po" class="form-control" id="payee" value="{{$purchase->po}}">
      </div>

      <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >Project:&nbsp;</label>
        <input name="project" class="form-control" id="payee" value="{{$purchase->project->project_name}}">
      </div>
    <?php
      $amount = 0;
    ?>
   @foreach($purchase->item as $it)
   <?php
   $total3 = 0;
   $total3 = $it->qty*$it->price;
   ?>
   @endforeach
      <div class="row">
      <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >Amount:&nbsp;</label>
        
        <input name="amount" class="form-control" id="payee" value="{{$total3}}">
                  
      </div>
      </div>

      <div class="col-sm-5">
      <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
      <input name="acctitle1" class="form-control" id="payee" value="Purchases" readonly="readonly">
      </div>
      <?php
      $amount = 0;
    ?>
   @foreach($purchase->item as $it)
   <?php
   $total3 = 0;
   $total3 = $it->qty*$it->price;
   ?>
   @endforeach
     <div class="row">
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Debit:&nbsp;</label>
        <input name="debit" class="form-control" id="payee" value="{{$total3}}" readonly="readonly">
     </div>
     </div>
     
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
        <input name="acctitle2" class="form-control" id="payee" value="Cash in Bank" readonly="readonly">
      </div>
  <?php
      $amount = 0;
    ?>
   @foreach($purchase->item as $it)
   <?php
   $total3 = 0;
   $total3 = $it->qty*$it->price;
   ?>
   @endforeach
     <div class="row">
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Credit:&nbsp;</label>
        <input name="credit" class="form-control" id="payee" value="{{$total3}}" readonly="readonly">
     </div>
     </div>
      

     <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
       {{Form::close()}}
   </div>
   </div>
   </div>
	  </div>
	  @endforeach
 
      </div>
           <hr>
    </div>
	</div>
  </div>
  
  </div>
  
    <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th style="text-align:center;">No</th>
            <th style="text-align:center;">Project</th>
            <th style="text-align:center;">PO #</th>
            <th style="text-align:center;">Check #</th>
            <th style="text-align:center;">Payee</th>
            <th style="text-align:center;">Amount</th>
            <th style="text-align:center;">Option</th>
         </tr>
      </thead>
      <tbody>
        <tr class="contents">
       <?php
       $summary = 0;
       ?>
        @foreach($cashitem3 as $vitem)
          <td>{{$vitem->cashvouchers_checkno}}</td>
          <td>{{$vitem->project}}</td>
          <td>{{$vitem->po_po}}</td>
          <td>{{$vitem->check}}</td>
          <td>{{$vitem->payee}}</td>
          <td>{{$vitem->amount}}</td>
          <td><a href="../cItem3/{{$vitem->id}}"><i class="fa fa-pencil"></i>&nbsp;Edit</a><br>
              <a href="../cash3/{{$vitem->id}}/delete"><i class="fa fa-trash-o"></i>&nbsp;Delete</a></td>
         </tr>
         <?php
         $total = 0;
         $total =  $total + $vitem->amount;
         $summary =  $total+$summary;
         ?>
        @endforeach
        <td><p><b>Total:</b></p></td>
         <td class="row" colspan="5">
         <div class="peso">
          <p><b>Php {{$summary}}</b></p>
         </div>
         </td>
         <td></td>
      </tbody>
   </table>
  
  
      <div class="pull-right" style="margin-bottom:50px;">
      <a href="../{{$vouch->checkno}}/{{$summary}}/cashvouchers2report" class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;Download PDF</a>
      <a href="../cashvouchers" class="btn btn-primary">Done</a>
      </div>
    @endforeach
  </div>
  </div>
  </div>
  </div>
  </div>
