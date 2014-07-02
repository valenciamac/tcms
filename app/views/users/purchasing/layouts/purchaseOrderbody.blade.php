<div class="col-md-9">
              {{Form::open(array('route' => 'po.store','class'=>'form-horizontal','role'=>'form'))}}
			<div class="row">
			
				<div class="col-xs-6">
					<label for="exampleInputEmail1">Supplier Name: </label>
					<input type="text" class="form-control input-sm" name="suppler_name" required>
				</div>

				<div class="col-xs-6">
					<label for="exampleInputEmail1">PRS #:</label>
					<input type="text" class="form-control input-sm" name="prs" required>
				</div>
				<div class="col-xs-6">
					<label for="exampleInputEmail1">PO #:</label>
					<input type="text" class="form-control input-sm" name="po" required>
				</div>
					
				
				<div class="col-lg-6">
					<label>P.O. Date:</label>
					<div class="input-append date">	
							<input id="dp1 date1" type="text" class="form-control input-sm" value="<?php echo date("Y/m/d") ?>" name="po_date"  required>
					</div>
				</div>
			
				  
				<div class="col-xs-6">
					<label>Address:</label>
					<input type="text" class="form-control input-sm" name="address" required>
				</div>
				<div class="col-xs-6">
					<label>Terms (Days):</label>
					<input type="text" class="form-control input-sm" name="terms" required>
				</div>
				<div class="col-xs-6">
					<label>Supplier Code:</label>
					<input type="text" class="form-control input-sm" name="supplier_code" required>
				</div>
				<div class="col-xs-6">
					<label>Deliver to:</label>
					<input type="text" class="form-control input-sm" name="deliverTo" required>
				</div>
			</div>

 <table class="table table-striped table-hover" style="padding-top:10px;">
              <thead>
                <tr>
                  <th>Qty</th>
                  <th>Unit</th>
                  <th>Description</th>
                  <th>Unit Price</th>
                  <th>Amount</th>
             
              </thead>
              <tbody>
              	<tr>
              	<div id='TextBoxesGroup'>
					<div id="TextBoxDiv1">
              		<td><input type="text" style="max-width:230px;" class="form-control input-sm" name="qty" id="textbox1" required></td>
              		<td><input type="text" style="max-width:2000px;" class="form-control input-sm" name="name" id="textbox1" required></td>
              		<td><input type="text" style="max-width:110px;" class="form-control input-sm" name="desc" id="textbox1" required></td>
              		<td><input type="text" style="max-width:110px;" class="form-control input-sm" name="price" id="textbox1"  required></td>
              		<td><input type="text" style="max-width:110px;" class="form-control input-sm" name="amount" id="textbox1" required></td>
              	
				</tr>
				</tbody>
				</table>
      			<div class="pull-right" style="padding-top:20px;">
					<input type="submit" class="btn btn-primary " value="Save">
					<input type="reset" class="btn btn-primary " value="Clear">
				</div>
				<div class="pull-left" style="padding-top:20px;">
					<input type="button" class="btn btn-primary " value="Add Button" id="addButton" >
				</div>
				<div class="pull-left" style="padding-top:20px;">
					<input type="button" class="btn btn-primary " value="Remove Button" id="removeButton" >
				</div>
			</div>
			</div>
				</div>
		{{Form::close()}}

			</div>
		</div>
		
	</div>
</div>