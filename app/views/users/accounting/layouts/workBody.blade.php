<div class="col-md-9">
   {{Form::open(array('route' => 'work.store','class'=>'form-horizontal','role'=>'form'))}}
   <div class="form-group">
      <label for="role" class="col-sm-3 control-label">Department:&nbsp;</label>
      <div class="col-sm-9">
         <select name="department" class="form-control" id="department">
            <option>Office</option>
            <option>Work Site</option>
         </select>
      </div>
   </div>
   <div class="form-group">
      <label for="role" class="col-sm-3 control-label">Position:&nbsp;</label>
      <div class="col-sm-9">
         <select name="position" class="form-control" id="position">
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
      </div>
   </div>
   <div class="form-group">
      <label for="fname" class="col-sm-3 control-label" >First Name:&nbsp;</label>
      <div class="col-sm-9">
         <input name="fname" type="text" class="form-control" id="fname" value="{{ Input::old('fname') }}">
         {{ $errors->first('fname', '<span class=errors>:message</span>') }}
      </div>
   </div>
   <div class="form-group">
      <label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
      <div class="col-sm-9">
         <input old name="lname" type="text" class="form-control" id="lname" value="{{ Input::old('lname') }}">
         {{ $errors->first('lname', '<span class=errors>:message</span>') }}
      </div>
   </div>
   <div class="form-group">
      <label for="lname" class="col-sm-3 control-label">Rate Per Day:&nbsp;</label>
      <div class="col-sm-9">
         <input old name="rate" type="text" class="form-control" id="rate" value="{{ Input::old('rate') }}">
         {{ $errors->first('lname', '<span class=errors>:message</span>') }}
      </div>
   </div>
   <div class="form-group">
      <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:60%;">Save &nbsp; <i class="fa fa-save"></i></button>
      {{Form::close()}}
   </div>
</div>
</div>
</div>
</div>
