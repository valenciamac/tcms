<div class="col-md-9">
	<ul class="nav nav-pills">
  		<li class="active"><a href="employ">Add Employee</a></li>
  		<li><a href="employ2">View Employee Details</a></li>
	</ul>

	              <h2>Add New Employee</h2>
                {{Form::open(array('route' => 'employee.store','class'=>'form-horizontal','role'=>'form'))}}

            <div class="form-group">
                <label for="role" class="col-sm-3 control-label">Department:&nbsp;</label>
                <div class="col-sm-9">
                <select name="department" class="form-control" id="department">
                    <option value="office">Office</option>
                    <option value="work">Work Site</option>
                </select>
            </div>
            </div>

            <div class="form-group">
                <label for="role" class="col-sm-3 control-label">Position:&nbsp;</label>
                <div class="col-sm-9">
                <select name="position" class="form-control" id="position">
                    <option value="acc" class="office">Accountant</option>
                    <option value="ad" class="office">Admin</option>
                    <option value="arch" class="office">Architect</option>
                    <option value="car" class="office">Carpenter</option>
                    <option value="cr" class="office">Corporate Secretary</option>
                    <option value="dr" class="office">Driver</option>
                    <option value="el" class="office">Electrician</option>
                    <option class="work">Engineer</option>
                    <option class="work">Foreman</option>
                    <option class="work">Gen. Stockman</option>
                    <option class="work">Labor</option>
                    <option class="work">Maintenance</option>
                    <option class="work">Mason</option>
                    <option class="work">Plumber</option>
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
            </div>
            </div>
            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >First Name:&nbsp;</label>
                <div class="col-sm-9">
                <input name="fname" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="fname" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>
            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Middle Name:&nbsp;</label>
                <div class="col-sm-9">
                <input name="mname" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="mname" value="{{ Input::old('mname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>

            <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
                <div class="col-sm-9">
                <input old name="lname" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="lname" value="{{ Input::old('lname') }}">
                {{ $errors->first('lname', '<span class=errors>:message</span>') }}
            </div>
            </div>

            <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Rate Per Day:&nbsp;</label>
                <div class="col-sm-9">
                <input old name="rate" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,6);" maxlength="6" placeholder="" required type="text" type="text" class="form-control" id="rate" value="{{ Input::old('rate') }}">
                {{ $errors->first('lname', '<span class=errors>:message</span>') }}
            </div>
            </div>
            
            <div class="form-group">

                <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:60%;">Save &nbsp; <i class="fa fa-save"></i></button>

            </div>
        {{Form::close()}}
		
			</div>
		</div>
		
	</div>
</div>