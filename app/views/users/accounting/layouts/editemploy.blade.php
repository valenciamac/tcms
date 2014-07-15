<div class="col-md-9">
				
		<!-- content here -->
		@if ($employee->count())
		<table class="table table-bordered table-hover" style="font-size:13px;">
	      <thead>
	        <tr>
	          <th>Id</th>
              <th>Department</th>
              <th>Position</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Rate</th>
              <th>Option</th>
	        </tr>
	      </thead>
	      <tbody>
	       
	        @foreach ($employee as $emp)
	        
	         <tr>
	         <form action="{{$emp->id}}/update">
	        	<td>{{ $emp->id }}</td>
	            <td>
	            <select name="department" class="form-control" id="department" value="{{$emp->department}}">
                    <option>Office</option>
                    <option>Work Site</option>
                </select>
            	</td>
	            <td>
	            <select name="position" class="form-control" id="position" value="{{$emp->position}}">
					<option>Accountant</option>
                    <option>Admin</option>
                    <option>Architect</option>
                    <option>Carpenter</option>
                    <option>Corporate Secretary</option>
                    <option>Driver</option>
                    <option>Electrician</option>
                    <option>Engineer</option>
                    <option>Foreman</option>
                    <option>Gen. Stockman</option>
                    <option>Labor</option>
                    <option>Maintenance</option>
                    <option>Mason</option>
                    <option>Plumber</option>
                    <option>President</option>
                    <option>Programmer</option>
                    <option>Project in-charge</option>
                    <option>Purchaser</option>
                    <option>Site</option>
                    <option>Steelman</option>
                    <option>Tile Settler</option>
                    <option>Vice President</option>
                    <option>Warehouseman</option>
                    <option>Welder</option>
				</select>
				</td>
	            
	            <td><input name="fname" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder=""  required value="{{ ($emp->fname) }}" class="form-controll"> </td>
	            <td><input name="mname" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required value="{{ ($emp->mname) }}" class="form-controll"> </td>
	            <td><input name="lname" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required value="{{ ($emp->lname) }}" class="form-controll"> </td>
	            <td><input name="rate" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,6);" maxlength="6" placeholder="" required type="text" value="{{ ($emp->rate) }}" class="form-controll"> </td>
	            
		 
	        </tr>
	        
	        @endforeach

	        
	      </tbody>
	    </table>
	    <button type="submit" class="btn btn-primary">Save</button>
	    <button type="back" class="btn btn-primary">Back</button>
	    </form>  

	    @endif

			</div>
		</div>
		
	</div>
</div>