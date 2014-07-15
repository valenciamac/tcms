<div class="col-md-9">

<h2>Cash/Check Voucher</h2>

<form class ="form-horizontal" role="form" action="vouchers">
<div class="form-horizontal" style="padding-top:40px;">

 			<div class = "form-horizontal">
			<table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>Description</th>
              <th>Amount</th>
            </tr>
          </thead>
      	   <tbody>
      	   	<tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    	</table>
    </div>

    	<div class="form-horizontal">
    	<table class="table table-bordered table-hover" style="font-size:13px;">
    	<thead>
            <tr>
              <th>Account Title</th>
              <th>Debit</th>
              <th>Credit</th>
            </tr>
         </thead>   
      	   <tbody>
      	   	<tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    </div>


 			<div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Payee:&nbsp;</label>
                <div class="col-xs-8">
                <input name="payee" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="payee" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>
            <div class="form-group">
					<label for="fname" class="col-sm-3 control-label" >Date:&nbsp;</label>
					<div class="input-append date col-xs-8">	
					<input id="vdate" type="text" class="form-control input-sm datepicker" value="<?php echo date("Y/m/d") ?>" name="vdate"  required>
					</div>
				</div>

     			<div class="form-group">          
     		    <label for="fname" class="col-sm-3 control-label" >Received From:&nbsp;</label>
                <div class="col-xs-8">
                <input name="receive" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="receive" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            	</div>
            	</div>
        
            	<div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Bank:&nbsp;</label>
                <div class="col-xs-8">
                <input name="bank" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="check" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            	</div>
            	</div>
            
            	<div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Check No:&nbsp;</label>
                <div class="col-xs-8">
                <input name="checkNo" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="checkNo" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
	            </div>
	            </div>
    
    			<div class="form-group">
				<label for="fname" class="col-sm-3 control-label" >Date:&nbsp;</label>
				<div class="col-xs-8">	
				<input id="checkdate" type="text" class="form-control input-sm datepicker" value="<?php echo date("Y/m/d") ?>" name="checkdate"  required>
				</div>    
				</div>
                
                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Receive Payment By:&nbsp;</label>
                <div class="col-xs-8">
                <input name="receiveby" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="receiveby" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            	</div>   
				</div> 
            	
    		
<div class="form-horizontal">
        <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Prepared By:&nbsp;</label>
                <div class="col-xs-8">
                <input name="prepare" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="prepare" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>
        <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Checked By:&nbsp;</label>
                <div class="col-xs-8">
                <input name="check" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="check" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>

        <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Approved By:&nbsp;</label>
                <div class="col-xs-8">
                <input name="approve" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="approve" value="Ramil M. Naraga">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div> 
        </div>

        <div class="form-group">

                <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:60%;">Save &nbsp; <i class="fa fa-save"></i></button>

            </div>
        </div>
        </form>


</div>
</div>
</div>
