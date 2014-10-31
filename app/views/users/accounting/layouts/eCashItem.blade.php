<h2>Edit Cash Voucher Item - Labor</h2>
@if ($cashitem->count())  
    @foreach ($cashitem as $cash)
<form action="{{$cash->id}}/update" class="form-horizontal" role="form">
    <div class="form-group">
				<div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Payee:&nbsp;</label>
                <input name="payee" class="form-control" id="payee" value="{{$cash->payee}}" readonly="readonly">
                </div>
      
                <div class="row">
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Labor:&nbsp;</label>
                @if ($labor->count())
                <select class="form-control input-sm" name="labor" value="">  
                <option disabled="disabled" selected>Choose Labor</option>
                @foreach ($labor as $lab)
                <option>{{$lab->labor}}</option>
                @endforeach
                </select>
                @else
                <select disabled class="form-control input-sm" >
                <option class="italic">No labor(s) yet</option>
                </select>
                @endif
                </div>
                </div>

                <div class="col-sm-4">
                <label for="fname" class="col-sm-3 control-label" >Description:&nbsp;</label>
                <input name="descr" class="form-control" id="payee" value="{{$cash->descr}}">
                </div>

                <div class="col-sm-4">
                <label for="amount" class="col-sm-3 control-label" >Amount:&nbsp;</label>
                <input name="amount" class="form-control" id="amt" value="{{$cash->amount}}" onkeyup="amtless();copy()" >
                </div>
                
                <div class="row">
                <div class="col-sm-4">
                <label for="fname" class="col-sm-3 control-label" >Less:&nbsp;</label>
                <input name="less" class="form-control" id="les" value="{{$cash->less}}" onkeyup="amtless();copy()">
                </div>
                </div>

                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
                <input name="acctitle1" class="form-control" id="payee" value="SubCon" readonly="readonly">
                </div>

                <div class="row">
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Debit:&nbsp;</label>
                <input name="debit" class="form-control" id="debit" readonly="readonly">
                </div>
                </div>
     
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
                <input name="acctitle2" class="form-control" id="payee" value="Cash in Bank" readonly="readonly" >
                </div>

                <div class="row">
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Credit:&nbsp;</label>
                <input name="credit" class="form-control" id="credit" readonly="readonly">
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
