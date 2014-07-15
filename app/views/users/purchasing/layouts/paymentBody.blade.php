<div class="col-md-9">
   <ul class="nav nav-tabs nav-justified">
      <li class="active"><a href="payment">Make Request For Payment</a></li>
      <li class=""><a href="view3">View Request For Payment Details</a></li>
      <li class=""><a href="view4">View Requet For Payment</a></li>
   </ul>
   {{Form::open(array('route' => 'rfp.store','class'=>'form-horizontal','role'=>'form'))}}
   <div class="row">
      <div class="col-xs-6">
         <label>Control Number:&nbsp;</label>
         <input type="text" class="form-control input-sm maxwidth" name="controlNo" class= "inputext" id="controlNo" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" style="min-width:290px;" required>
      </div>
      <div class="col-xs-6 ">
         <label >Payee (Supplier):</label>
         <input type="text" class="form-control input-sm maxwidth" name="payee" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder="" required >
      </div>
      <div class="col-xs-6">
         <label>Requested Date:</label> 
         <div class="input-append date"> 
            <input id="datepicker1" type="text" class="form-control input-sm datepicker maxwidth" value="<?php echo date("m/d/Y") ?>" name="requestedDate" required>
         </div>
      </div>
      <div class="col-xs-6">
         <label>Reason</label>
         <input type="text" class="form-control input-sm maxwidth" name="reason" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required >
      </div>
   </div>
   <table class="table table-striped table-hover" style="padding-top:10px;">
      <thead>
         <tr>
            <th>PO Number</th>
            <th>DR Number</th>
            <th>SI Number</th>
            <th>CI Number</th>
            <th>SO Number</th>
            <th>Others</th>
            <th>Description</th>
            <th>Amount</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><input type="text" style="max-width:110px;" class="form-control input-sm" name="po_number" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder=""></td>
            <td><input type="text" style="max-width:110px;" class="form-control input-sm" name="dr_number" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder=""></td>
            <td><input type="text" style="max-width:110px;" class="form-control input-sm" name="si_number" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder=""></td>
            <td><input type="text" style="max-width:110px;" class="form-control input-sm" name="ci_number" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder=""></td>
            <td><input type="text" style="max-width:100px;" class="form-control input-sm" name="so_number" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder=""></td>
            <td><input type="text" style="max-width:90px;" class="form-control input-sm" name="others" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder=""></td>
            <td><input type="text" style="max-width:90px;" class="form-control input-sm" name="description" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder=""></td>
            <td><input type="text" style="max-width:90px;" class="form-control input-sm" name="amount"  onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder=""></td>
            <td><b><input type="hidden" name="controlNo1"id="controlNo1" class="inputext"></b></td>
         </tr>
      </tbody>
   </table>
   <div class="pull-right" style="padding-top:20px;">
      <input type="submit" class="btn btn-primary " value="Save">
      <input type="reset" class="btn btn-primary " value="Clear">
   </div>
   {{Form::close()}}
</div>
</div>
</div>
</div>