   <!-- content here -->
      <div class="span7">
            
            
            <h3>Employee</h3>
            <div class="panel-group" id="accordion">
              <!-- buttons view add -->

            <div ><input type="text" id="searchemploy" class="hanap" placeholder="search">
            <div class="pull-right">
              <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#adduser">
                Add New Employee
              </a>
              </div>
              <!-- buttons --></div>
          <div id="adduser" class="panel-collapse collapse">
            <div class="panel-body">
            <hr>
                {{Form::open(array('route' => 'employee.store','class'=>'form-horizontal','role'=>'form'))}}
<div class="form-group" style="padding-bottom:45px;">
            <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Department:&nbsp;</label>
                <div class="col-sm-9">
                <select name="department" required class="form-control" id="department">
                    <option value="office">Office</option>
                    <option value="worksite">Work Site</option>
                </select>
            </div>
            </div>

            <div class="form-group">
                <label for="role" class="col-sm-2 control-label">Position:&nbsp;</label>
                <div class="col-sm-9">
                <select name="position" required class="form-control" id="position">
                    <option value="accountant" class="office">Accountant</option>
                    <option value="admin" class="office">Admin</option>
                    <option value="architect" class="worksite">Architect</option>
                    <option value="carpenter" class="worksite">Carpenter</option>
                    <option value="corpsec" class="office">Corporate Secretary</option>
                    <option value="driver" class="work site">Driver</option>
                    <option value="electrician" class="worksite office">Electrician</option>
                    <option value="engineer" class="worksite">Engineer</option>
                    <option value="foreman" class="worksite">Foreman</option>
                    <option value="stockman" class="worksite">Gen. Stockman</option>
                    <option value="laborer" class="worksite">Laborer</option>
                    <option value="maintenance" class="worksite ffice">Maintenance</option>
                    <option value="mason" class="worksite">Mason</option>
                    <option value="plumber" class="worksite">Plumber</option>
                    <option value="president" class="office">President</option>
                    <option value="programmer" class="office">Programmer</option>
                    <option value="proincha" class="worksite">Project in-charge</option>
                    <option value="purchase" class="office">Purchaser</option>
                    <option value="site" class="worksite">Site</option>
                    <option value="steelman" class="worksite">Steelman</option>
                    <option value="settler" class="worksite">Tile Settler</option>
                    <option value="vicepres" class="office"> Vice President</option>
                    <option value="warehouse" class="worksite">Warehouseman</option>
                    <option value="welder" class="worksite">Welder</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >First Name:&nbsp;</label>
                <div class="col-sm-9">
                <input name="fname" required onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="fname" value="{{ Input::old('fname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>
            <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >Middle Name:&nbsp;</label>
                <div class="col-sm-9">
                <input name="mname" required onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="mname" value="{{ Input::old('mname') }}">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>

            <div class="form-group">
                <label for="lname" class="col-sm-2 control-label">Last Name:&nbsp;</label>
                <div class="col-sm-9">
                <input name="lname" required onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required type="text" class="form-control" id="lname" value="{{ Input::old('lname') }}">
                {{ $errors->first('lname', '<span class=errors>:message</span>') }}
            </div>
            </div>

            
           <div class="form-inline">
                <label for="lname" class="col-sm-3 control-label">Paydate:&nbsp;</label>
                <div class="col-xs-3">
                <input  type="text" onkeypress="return numeric3();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,10);" maxlength="10" required class="form-control input-sm datepicker maxwidth" value="{{ date('Y-m-d') }}" name="paydate" required>
                
            </div>
            </div>


            <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Pay Per Day:&nbsp;</label>
                <div class="col-xs-3">
                <input name="rate" required onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,6);" maxlength="6" placeholder="" required type="text" type="text" class="form-control" id="rate" onkeyup="sum2();">
                {{ $errors->first('lname', '<span class=errors>:message</span>') }}
            </div>
            </div>

            <div class="form-inline">
                <label for="fname" class="col-sm-3 control-label" >Days:&nbsp;</label>
                <div class="col-xs-3">
                <select name="days" required class="form-control" id="days" onclick="sum2();">
                    <option value="0" class="accountant admin architect carpenter corpsec drivver electrician engineer foreman stockman laborer maintenance mason plumber president programmer proincha purchase site steelman settler vicepres warehouse welder">-------------------------------</option>
                    <option value="15" class="accountant admin corpsec drivver electrician president programmer proincha purchase vicepres">15</option>
                    <option value="7" class="architect carpenter drivver electrician engineer foreman stockman laborer maintenance mason plumber proincha site steelman settler warehouse welder">7</option>
                    <option value="1" class="electrician foreman laborer maintenance mason plumber settler welder">1</option>
                </select>
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Basic Salary:&nbsp;</label>
                <div class="col-xs-3">
                <input name="basic"  readonly="" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,6);" maxlength="6" placeholder="" required type="text" type="text" class="form-control" id="basic">
                {{ $errors->first('fname', '<span class=errors>:message</span>') }}
            </div>
            </div>


                   
             
          <div class="form-inline">
      <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:35%;">Save &nbsp; <i class="fa fa-save"></i></button>
   </div>
        </div>
        {{Form::close()}}
		
			</div>
		</div>
		
@include('users.accounting.layouts.viewemploy')
	</div>
</div>