<h2>Edit Check Voucher Item</h2> 
<div class="form-group">
   <a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newbank">Add a New Bank</a>
</div>
@if ($checkitem->count())  
    @foreach ($checkitem as $check)
    
<form action="{{$check->id}}/update" class="form-horizontal" role="form">
<div class="form-group">
<div class="col-sm-4">
        <label for="fname" class="col-sm-3 control-label" >No:&nbsp;</label>
        <input name="check" class="form-control" id="payee" value="{{$check->check}}">
      </div>
      
      <div class="row">
      <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Date:&nbsp;</label>
        <input name="checkdate" class="form-control" id="payee" value="{{$check->checkdate}}">
      </div>
      </div>

      <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Payee:&nbsp;</label>
        <input name="payee" class="form-control" id="payee" value="{{$check->payee}}">
        </div>
     
     <div class="row">
      <div class="col-sm-4">
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
        <input name="po_po" class="form-control" id="payee" value="{{$check->po_po}}">
      </div>

      <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >Project:&nbsp;</label>
        <input name="project" class="form-control" id="payee" value="{{$check->project}}">
      </div>

      <div class="row">
      <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >Amount:&nbsp;</label>
        <input name="amount" class="form-control" id="payee" value="{{$check->amount}}" readonly="readonly">
      </div>
      </div>
      
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
        <input name="acctitle1" class="form-control" id="payee" value="Accounts Payable" readonly="readonly">
      </div>

     <div class="row">
     <div class="col-sm-4">
        <label for="fname" class="col-sm-3 control-label" >Debit:&nbsp;</label>
        <input name="debit" class="form-control" id="payee" value="{{$check->debit}}" readonly="readonly">
     </div>
     </div>
     
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
        <input name="acctitle2" class="form-control" id="payee" value="Cash in Bank" readonly="readonly">
      </div>

     <div class="row">
     <div class="col-sm-4">
        <label for="fname" class="col-sm-3 control-label" >Credit:&nbsp;</label>
        <input name="credit" class="form-control" id="payee" value="{{$check->credit}}" readonly="readonly">
     </div>
     </div>
     </div>

     <div class="form-group"> 
        <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:35%;">Save &nbsp; <i class="fa fa-save"></i></button>
        </div>
        <div class="form-group"> 
        <a href="../checkvouchers" class="btn btn-primary btn-block pull-right" style="width:35%;">Done &nbsp;<i class="fa fa-arrow-circle-left"></i></a>
      </div>

</form>

@endforeach
@endif
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


     </div>