<div class="col-md-9">
   {{Form::open(array('route' => 'Po.store','class'=>'form-horizontal','role'=>'form'))}}
   <div class="form-group" style="padding-top:40px;">
      <label for="fname" class="col-sm-3 control-label">First Name:&nbsp;</label>
      <div class="col-sm-9">
         <input name="fname" type="text" class="form-control" id="fname">
         {{ $errors->first('fname', '<span class=errors>:message</span>') }}
      </div>
   </div>
   <div class="form-group">
      <label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
      <div class="col-sm-9">
         <input name="lname" type="text" class="form-control" id="lname">
         {{ $errors->first('lname', '<span class=errors>:message</span>') }}
      </div>
   </div>
   {{ Form::close() }}
</div>
</div>
</div>
</div>
