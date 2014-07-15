<div class="col-md-9">
				
		<!-- content here -->
		@if ($po->count())
		<table class="table table-bordered table-hover" style="font-size:13px;">
	      <thead>
	        <tr>
	          <th>Id</th>
	          <th>Supplier_name</th>
	          <th>Prs</th>
	          <th>Po</th>
	          <th>Po_date</th>
	          <th>Address</th>
	          <th>Terms</th>
	          <th>Supplier_code</th>
	          <th>Deliver To</th>
	        </tr>
	      </thead>
	      <tbody>
	       
	        @foreach ($po as $purchase)
	        
	         <tr>
	         <form action="{{$purchase->id}}/update">
	        	<td>{{ $purchase->id }}</td>
	            <td><input name="suppler_name" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder="" required value="{{ ($purchase->suppler_name) }}" class="form-controll"> </td>
	            <td><input name="prs" type="text" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required value="{{ ($purchase->prs) }}" class="form-controll"> </td>
	            <td><input name="po" type="text" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder=""  required value="{{ ($purchase->po) }}" class="form-controll"> </td>
	            <td><input name="po_date" type="text" onkeypress="return numeric3();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,10);" maxlength="10" value="{{ ($purchase->po_date) }}" class="form-controll" required> </td>
	            <td><input name="address" type="text" onkeypress="return validate();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,45);" maxlength="45" placeholder="" required value="{{ ($purchase->address) }}" class="form-controll"> </td>
	            <td><input name="terms" type="text" onkeypress="return numeric2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,2);" maxlength="2" placeholder="" required value="{{ ($purchase->terms) }}" class="form-controll"> </td>
	            <td><input name="supplier_code" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder="" required type="text" value="{{ ($purchase->supplier_code) }}" class="form-controll"> </td>
	            <td><input name="deliverTo" type="text" onkeypress="return validate();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,45);" maxlength="45" placeholder="" required value="{{ ($purchase->deliverTo) }}" class="form-controll"> </td>
		 
	        </tr>
	        
	        @endforeach

	        
	      </tbody>
	    </table>
	    <button type="submit" class="btn btn-primary">save</button>
	    <button type="back" class="btn btn-primary">Back</button>
	    </form>  
	    @else
	    <h1>No results</h1>
	    @endif



			</div>
		</div>
		
	</div>
</div>