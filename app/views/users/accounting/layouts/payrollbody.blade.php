<div class="col-md-9">
   {{Form::open(array('route' => 'users.store','class'=>'form-horizontal','role'=>'form'))}}
   <div class ="form-group">
      <label for="dept" class="col-sm-3 control-label">Search ID No.:&nbsp;</label>
      <div class="col-sm-9">
         <input name="idno" type="text" class="form-control" id="idno">
      </div>
   </div>
   <div class="form-group">
      <label for="dept" class="col-sm-3 control-label">ID No.:&nbsp;</label>
      <div class="col-sm-7">
         <input name="idno" type="text" class="form-control" id="idno">
      </div>
   </div>
   <div class="form-group">
      <label for="fname" class="col-sm-3 control-label">First Name:&nbsp;</label>
      <div class="col-sm-5">
         <input name="fname" type="text" class="form-control" id="fname">
      </div>
   </div>
   <div class="form-group">
      <label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
      <div class="col-sm-5">
         <input name="username" type="text" class="form-control" id="username">
      </div>
   </div>
   <div class="form-group">
      <label for="dept" class="col-sm-3 control-label">Department:&nbsp;</label>
      <div class="col-sm-5">
         <input name="dept" type="text" class="form-control" id="dept">
      </div>
   </div>
   <div class="form-group">
      <label for="dept" class="col-sm-3 control-label">Position:&nbsp;</label>
      <div class="col-sm-5">
         <input name="dept" type="text" class="form-control" id="dept">
      </div>
   </div>
   <div class="form-group">
      <label for="dept" class="col-sm-3 control-label">Hours Worked:&nbsp;</label>
      <div class="col-sm-9">
         <input name="dept" type="text" class="form-control" id="dept">
      </div>
   </div>
   <div class="form-group">
      <label for="dept" class="col-sm-3 control-label">Days Worked:&nbsp;</label>
      <div class="col-sm-9">
         <input name="dept" type="text" class="form-control" id="dept">
      </div>
   </div>
   <div class="form-group" style="padding-top:20px;">
      <label for="dept" class="col-sm-3 control-label">Basic Salary:&nbsp;</label>
      <div class="col-sm-9">
         <input name="salary" type="text" class="form-control" id="salary">
      </div>
   </div>
</div>
<div class="form-group">
   <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:90%;">Sign in &nbsp; <i class="fa fa-play-circle"></i></button>
</div>
{{Form::close()}}
</div>
</div>
</div>
</div>