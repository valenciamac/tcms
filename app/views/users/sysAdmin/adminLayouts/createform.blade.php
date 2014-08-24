<div class="col-md-9">
   <h2>Create New User</h2>
   {{Form::open(array('route' => 'users.store','class'=>'form-horizontal','role'=>'form'))}}
   <div class="form-group" style="padding-top:40px;">
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
      <label for="username" class="col-sm-3 control-label">Username:&nbsp;</label>
      <div class="col-sm-9">
         <input name="username" type="text" class="form-control" id="username" value="{{ Input::old('username') }}">
         {{ $errors->first('username', '<span class=errors>:message</span>' ) }}
      </div>
   </div>
   <div class="form-group">
      <label for="password" class="col-sm-3 control-label">Password:&nbsp;</label>
      <div class="col-sm-9">
         <input name="password" type="password" class="form-control" id="password">
         {{ $errors->first('password', '<span class=errors>:message</span>') }}
      </div>
   </div>
   <div class="form-group">
      <label for="role" class="col-sm-3 control-label">role:&nbsp;</label>
      <div class="col-sm-9">
         <select name="role" class="form-control" id="role">
            <option value="sysAdmin">System Administrator</option>
            <option value="accounting">Accounting</option>
            <option value="admin">Administrator</option>
            <option value="financing">Financing</option>
            <option value="purchasing">Purchasing</option>
         </select>
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