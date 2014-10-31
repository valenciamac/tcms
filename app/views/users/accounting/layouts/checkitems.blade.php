
<div ng-app ng-controller="CheckItemController">
       <a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newbank">Add a New Bank</a>
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

                    <!-- MODAL ADD ITEM -->
       <div class="modal fade" id="newitem{{$purchase->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add Voucher Item</h4>
                </div>
                <div class="modal-body">
 {{Form::open(array('route' => 'checkitem.store','class'=>'form-horizontal','role'=>'form'))}}
 @foreach($checkvouchers as $vouch)
     <input type="hidden" value="{{$vouch->checkno}}" name="checkvouchers_checkno" readonly="readonly">
     <input type="hidden" value="1" name="rel" readonly="readonly">
     @endforeach

   <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >No:&nbsp;</label>
        <input name="check" class="form-control" id="payee">
      </div>
      
      <div class="row">
      <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Date:&nbsp;</label>
        <input name="checkdate" class="form-control" id="payee" value="{{$purchase->due_date->toFormattedDateString()}}">
      </div>
      </div>

      <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Payee:&nbsp;</label>
        <input name="payee" class="form-control" id="payee" value="{{$purchase->suppler_name}}">
        </div>
     
     <div class="row">
      <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Bank:&nbsp;</label>
         @if ($bank->count())
            <select class="form-control input-sm" name="bank">  
            <option disabled="disabled" selected>Choose Bank</option>
            @foreach ($bank as $banks)
              <option>{{$banks->bname}}</option>
            @endforeach
            </select>
            @else
            <select disabled class="form-control input-sm" >
              <option class="italic">No bank(s) yet</option>
            </select>
            @endif
        </div> 
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
      @foreach($po as $purchase)
  @foreach($purchase->si as $si)
     <input type="hidden" value="{{$si->num}}" name="si" readonly="readonly">
  @endforeach
  @foreach($purchase->dr as $dr)
     <input type="hidden" value="{{$dr->num}}" name="dr" readonly="readonly">
  @endforeach
  @foreach($purchase->ci as $ci)
     <input type="hidden" value="{{$ci->num}}" name="ci" readonly="readonly">
  @endforeach
  @foreach($purchase->so as $so)
     <input type="hidden" value="{{$so->num}}" name="so" readonly="readonly">
  @endforeach
  @endforeach  

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
      


  <!-- MODAL BANK -->
       <div class="modal fade" id="newbank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Bank Name</h4>
                </div>
                <div class="modal-body">
                {{Form::open(array('route' => 'bank.store','class'=>'form-horizontal','role'=>'form'))}}
                  <input name="bname" class="form-control" id="bname">


                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary"> Save</button>
                </div>
                {{Form::close()}}
              </div>
            </div>
          </div>
    <!-- END MODAL BANK -->
<!--   <div class="form-group">
       <form class="form-inline" action="checkvouchersdetails" role="form">
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="Search" ng-model="search" id="searchcash"> 
         </div>
   </form>
</div> -->
 <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th style="text-align:center;">No</th>
            <th style="text-align:center;">Project</th>
            <th style="text-align:center;">PO #</th>
            <th style="text-align:center;">Check #</th>
            <th style="text-align:center;">Check Date</th>
            <th style="text-align:center;">Payee</th>
            <th style="text-align:center;">Bank</th>
            <th style="text-align:center;">Amount</th>
            <th style="text-align:center;">Options</th>
         </tr>
      </thead>
      <tbody id="cashsearch">
        <tr class="contents">
         <?php
       $summary = 0;
       ?>
        @foreach($checkitem as $vitem)
          <td>{{$vitem->checkvouchers_checkno}}</td>
          <td>{{$vitem->project}}</td>
          <td>{{$vitem->po_po}}</td>
          <td>{{$vitem->check}}</td>
          <td>{{$vitem->checkdate}}</td>
          <td>{{$vitem->payee}}</td>
          <td>{{$vitem->bank}}</td>
          <td>{{$vitem->amount}}</td>
          <td><a href="../chItem/{{$vitem->id}}"><i class="fa fa-pencil"></i>&nbsp;Edit</a><br>
              <a href="../check/{{$vitem->id}}/delete"><i class="fa fa-trash-o"></i>&nbsp;Delete</a></td>   
         </tr>
         <?php
         $total = 0;
         $total =  $total + $vitem->amount;
         $summary =  $total+$summary;
         ?>
        @endforeach
        <td><p><b>Total:</b></p></td>
         <td class="row" colspan="7">
         <div class="peso">
          <p><b>Php {{$summary}}</b></p>
         </div>
         </td>
         <td></td>
      </tbody>
   </table>
  
  @foreach($checkvouchers as $vouch)
      <div class="pull-right" style="margin-bottom:50px;">
      <a href="../{{$vouch->checkno}}/{{$summary}}/checkvouchers1report" class="btn btn-primary"><i class="fa fa-print"></i>&nbsp;Download PDF</a>
      <a href="../checkvouchers" class="btn btn-primary">Done</a>
      </div>

    @endforeach



</div>
</div>
</div>
</div>
</div>