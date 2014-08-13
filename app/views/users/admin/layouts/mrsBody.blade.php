<div class="col-md-9" >
   
   <!-- content here -->
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#adduser">
          Add New MRS
        </a>
    <div id="adduser" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
         {{Form::open(array('route' => 'mrs.store','class'=>'form-horizontal','role'=>'form'))}}
            <div class="form-group">
			    <label for="mrsno" class="col-sm-2 control-label">MRS No:&nbsp;</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control number" id="mrsno" placeholder="" name="mrsno">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="ProjectLocation" class="col-sm-2 control-label">Project Name:&nbsp;</label>
			    <div class="col-sm-10">
			      <select class="form-control" id="pname" name="pname">
            <option disabled selected></option>
            @foreach ($project as $proj)
                <option value="{{$proj->project_name}}" name="projname">{{ $proj->project_name }}</option>
            @endforeach     
            </select>
			    </div>
			  </div>
        <div class="form-group">
          <label for="ploc" class="col-sm-2 control-label">Project Location:&nbsp;</label>
          <div class="col-sm-10">
          <select class="form-control" id="ploc">
          @foreach($project as $proj)
            <option class="{{ $proj->project_name }}" name="location" value="{{$proj->location}}">{{ $proj->location }}</option>
          @endforeach
          </select>
         
          </div>
        </div>
         
           <div class="submit">
            <button type="submit" class="btn btn-primary pull-right">Save MRS</button>
            </div>
         {{Form::close()}}

         </div>
         </div><hr>
         </div>
        @include('users.admin.layouts.addMrs')
</div>


</div>
</div>
</div>	