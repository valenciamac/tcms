<div class="col-md-9" >
   
   <!-- content here -->
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#adduser">
          Add New Project
        </a>
    <div id="adduser" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
         {{Form::open(array('route' => 'project.store','class'=>'form-horizontal','role'=>'form'))}}
            <div class="form-group">
			    <label for="ProjectName" class="col-sm-2 control-label">Project Name:&nbsp;</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="ProjectName" placeholder="" name="projectName">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="ProjectLocation" class="col-sm-2 control-label">Project Location:&nbsp;</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="ProjectLocation" placeholder="" name="projectLocation">
			    </div>
			  </div>
         
           <div class="submit">
            <button type="submit" class="btn btn-primary pull-right">Add User</button>
            </div>
         {{Form::close()}}

         </div>
         </div><hr>
         </div>
@include('users.sysAdmin.adminLayouts.addProject')
</div>
</div>
</div>
</div>