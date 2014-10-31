<h2>Edit Cash Voucher Item - Material</h2>
@if ($cashitem3->count())
    @foreach ($cashitem3 as $cash)
 <form action="{{$cash->id}}/update" class="form-horizontal" role="form">
 	<div class="form-group">y
        <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >No:&nbsp;</label>
        <input name="check" class="form-control" id="payee" value="{{$cash->check}}">
        </div>
        <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Payee:&nbsp;</label>
        <input name="payee" class="form-control" id="payee" value="{{$cash->payee}}">
        </div>
        <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >PO:&nbsp;</label>
        <input name="po_po" class="form-control" id="payee" value="{{$cash->po_po}}">
      </div>

      <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >Project:&nbsp;</label>
        <input name="project" class="form-control" id="payee" value="{{$cash->project}}">
      </div>
       <div class="row">
      <div class="col-sm-3">
        <label for="fname" class="col-sm-3 control-label" >Amount:&nbsp;</label>
        
        <input name="amount" class="form-control" id="payee" value="{{$cash->amount}}" readonly="readonly">
                  
      </div>
      </div>

      <div class="col-sm-5">
      <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
      <input name="acctitle1" class="form-control" id="payee" value="Purchases" readonly="readonly">
      </div>

     <div class="row">
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Debit:&nbsp;</label>
        <input name="debit" class="form-control" id="payee" value="{{$cash->credit}}" readonly="readonly">
     </div>
     </div>
     
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
        <input name="acctitle2" class="form-control" id="payee" value="Cash in Bank" readonly="readonly">
      </div>

     <div class="row">
     <div class="col-sm-5">
        <label for="fname" class="col-sm-3 control-label" >Credit:&nbsp;</label>
        <input name="credit" class="form-control" id="payee" value="{{$cash->credit}}" readonly="readonly">
     </div>
     </div>
</div>
      <div class="form-group"> 
        <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:10%;">Save &nbsp; <i class="fa fa-save"></i></button>
        </div>
        <div class="form-group"> 
        <a href="../cashvouchers" class="btn btn-primary btn-block pull-right" style="width:10%;">Done &nbsp;<i class="fa fa-arrow-circle-left"></i></a>
      </div>
   </form>
   @endforeach
   @endif           

