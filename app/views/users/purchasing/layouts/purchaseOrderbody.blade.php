<div class="col-md-9">
              {{Form::open(array('route' => 'po.store','class'=>'form-horizontal','role'=>'form'))}}
			<div class="row">
			
				<div class="col-xs-6">
					<label for="exampleInputEmail1">PO #: </label>
					<input type="text" class="form-control input-sm" name="po" class="inputext" id="po" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder=""  required>
					
				</div>

				<div class="col-xs-6">
					<label for="exampleInputEmail1">PRS #:</label>
					<input type="text" class="form-control input-sm" name="prs"  onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required>
				</div>
				<div class="col-xs-6">
					<label for="exampleInputEmail1">Supplier Name:</label>
					<input type="text" class="form-control input-sm" name="suppler_name" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder="" required>
				</div>
					
				
				<div class="col-lg-6">
					<label>P.O. Date:</label>
					<div class="input-append date">	
							<input id="datepicker" type="text" class="form-control input-sm" value="<?php echo date("Y/m/d") ?>" name="po_date"  required>
					</div>
				</div>
			
				  
				<div class="col-xs-6">
					<label>Address:</label>
					<input type="text" class="form-control input-sm" name="address" onkeypress="return validate();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,45);" maxlength="45" placeholder="" required>
				</div>
				<div class="col-xs-6">
					<label>Terms (Days):</label>
					<input type="text" class="form-control input-sm" name="terms" onkeypress="return numeric2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,2);" maxlength="2" placeholder="" required>
				</div>
				<div class="col-xs-6">
					<label>Supplier Code:</label>
					<input type="text" class="form-control input-sm" name="supplier_code"  onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder="" required>
				</div>
				<div class="col-xs-6">
					<label>Deliver to:</label>
					<input type="text" class="form-control input-sm" name="deliverTo"  onkeypress="return validate();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,45);" maxlength="45" placeholder="" required>
				</div>
			</div>
 <table class="table table-striped table-hover" style="padding-top:10px;" id="dataTable">
              
              <tbody>
              	<tr>
              		<TD><INPUT type="checkbox" name="chk"/></TD>
              		<td><b><input type="text" style="max-width:230px;" class="form-control input-sm" name="qty"  id="text1" onkeyup="add2();" placeholder="Quantity" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required></td>
              		<td><b><input type="text" style="max-width:2000px;" class="form-control input-sm" name="name" placeholder="Name" onkeypress="return validate2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,25);" maxlength="25" placeholder="" required></td>
              		<td><b><input type="text" style="max-width:110px;" class="form-control input-sm" name="desc" placeholder="Description" onkeypress="return validate2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,25);" maxlength="25" placeholder="" required></td>
              		<td><b><input type="text" style="max-width:110px;" class="form-control input-sm" name="price" id="text2" placeholder="Price" onkeyup="add2();" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required></td>
              		<td><b><input type="text" style="max-width:110px;" class="form-control input-sm" name="amount" placeholder="Amount" id="text3" required></td>
              		<td><b><input type="hidden" name="po1" id="po1" class="inputext"></b></td>
				</tr>
				</tbody>
				</table>
      			<div class="pull-right" style="padding-top:20px;">
					<input type="submit" class="btn btn-primary " value="Save">
					<input type="reset" class="btn btn-primary " value="Clear">
				</div>
				<div class="pull-left" style="padding-top:20px;">
					<INPUT type="button" class="btn btn-primary" value="Add Row" onclick="addRow('dataTable')" />
 
				</div>
				<div class="pull-left" style="padding-top:20px;">
					<INPUT type="button" class="btn btn-primary" value="Delete Row" onclick="deleteRow('dataTable')" />
				</div>
				</div>
		{{Form::close()}}

			</div>
		</div>
		
	</div>
</div>