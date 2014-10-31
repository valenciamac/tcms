
				
		<!-- content here -->

		<h3> Edit Employee </h3>
		@if ($employee->count())
		       
	        @foreach ($employee as $emp)
	       <form action="{{$emp->id}}/update">
	       <div class="form-group" style="padding-bottom:45px;">
            <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Department:&nbsp;</label>
                <div class="col-sm-6">
                <select name="department" class="form-control" id="department">
                    <option id="office" value="office">Office</option>
                    <option id="worksite" value="worksite">Work Site</option>
                </select>
            </div>
            </div><br>
            <br>
             <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Position:&nbsp;</label>
                <div class="col-sm-6">
                <select name="position" class="form-control" id="position" id="position">
                    <option id="accountant" value="accountant" class="office">Accountant</option>
                    <option id="admin" value="admin" class="office">Admin</option>
                    <option id="architect" value="architect" class="worksite">Architect</option>
                    <option id="carpenter" value="carpenter" class="worksite">Carpenter</option>
                    <option id="corpsec" value="corpsec" class="office">Corporate Secretary</option>
                    <option id="driver" value="driver" class="worksite">Driver</option>
                    <option id="electrician" value="electrician" class="worksite">Electrician</option>
                    <option id="engineer" value="engineer" class="worksite">Engineer</option>
                    <option id="foreman" value="foreman" class="worksite">Foreman</option>
                    <option id="stockman" value="stockman" class="worksite">Gen. Stockman</option>
                    <option id="laborer" value="laborer" class="worksite">Laborer</option>
                    <option id="maintenance" value="maintenance" class="worksite">Maintenance</option>
                    <option id="mason" value="mason" class="worksite">Mason</option>
                    <option id="plumber" value="plumber" class="worksite">Plumber</option>
                    <option id="president" value="president" class="office">President</option>
                    <option id="programmer" value="programmer" class="office">Programmer</option>
                    <option id="proincha" value="proincha" class="worksite">Project in-charge</option>
                    <option id="purchase" value="purchase" class="office">Purchaser</option>
                    <option id="site" value="site" class="worksite">Site</option>
                    <option id="steelman" value="steelman" class="worksite">Steelman</option>
                    <option id="settler" value="settler" class="worksite">Tile Settler</option>
                    <option id="vicepres" value="vicepres" class="office"> Vice President</option>
                    <option id="warehouse" value="warehouse" class="worksite">Warehouseman</option>
                    <option id="welder" value="welder" class="worksite">Welder</option>
                </select>
            </div>
            </div>
            <br><br>
             <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >First Name:&nbsp;</label>
                <div class="col-sm-6">
                <input name="fname" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="fname" value="{{
                $emp->fname}}">
                
            </div>
            </div>
             <br><br>
             <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >First Name:&nbsp;</label>
                <div class="col-sm-6">
                <input name="mname" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="fname" value="{{
                $emp->mname}}">
                
            </div>
            </div>
             <br><br>
             <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >First Name:&nbsp;</label>
                <div class="col-sm-6">
                <input name="lname" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="fname" value="{{
                $emp->lname}}">
                
            </div>
            </div>
            <br><br>
            <div class="form-group">
                <label for="lname" class="col-sm-2 control-label">Rate Per Day:&nbsp;</label>
                <div class="col-sm-6">
                <input name="rate" value="{{$emp->rate}}" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,6);" maxlength="6" placeholder="" required type="text" type="text" class="form-control" id="rate" onkeyup="sum2();">
                {{ $errors->first('lname', '<span class=errors>:message</span>') }}
            </div>
            </div><br><br>
 


                   
             
          <div class="form-group">
      <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:35%;">Save &nbsp; <i class="fa fa-save"></i></button>
   </div>
        </div>
            <script>
            $("#{{$emp->department}}").attr("selected", "selected");
            </script>
             <script>
            $("#{{$emp->position}}").attr("selected", "selected");
            </script>
             <script>
            $("#{{$emp->days}}").attr("selected", "selected");
            </script>
	        @endforeach

	    @endif
	