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
 {{Form::open(array('route' => 'checkdetails.store','class'=>'form-horizontal','role'=>'form'))}}
 @foreach($checkvouchers as $vouch)
     
     <input type="hidden" value="{{$vouch->checkno}}" name="checkvouchers_checkno" readonly="readonly">
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

  <div>
     @include('users.accounting.layouts.viewcheckitems')
    </div>



</div>
</div>
</div>
</div>
</div>
      