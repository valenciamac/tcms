   <!-- content here -->
      <div class="span7">
            
            
            <h3>Projects</h3>
            <div class="panel-group" id="accordion">
              <!-- buttons view add -->

            <div ><input type="text" id="projsearch" class="hanap" placeholder="search">
            <div class="pull-right">
              <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#adduser">
                Add New Project
              </a>
              </div>
              <!-- buttons --></div>
          <div id="adduser" class="panel-collapse collapse">
            <div class="panel-body">
            <hr>
               {{Form::open(array('route' => 'project.store','class'=>'form-horizontal','role'=>'form', 'id'=>'project'))}}
                  <div class="form-group">
                   <label for="ProjectName" class="col-sm-2 control-label">Project Name:&nbsp;</label>
                   <div class="col-sm-10 controls">
                       <input type="search" required class="form-control" id="name" placeholder="" name="projectName">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="name" class="col-sm-2 control-label">Project Location:&nbsp;</label>
                   <div class="col-sm-10 controls">
                     <input type="search" required class="form-control" id="projectLocation" placeholder="" name="projectLocation">
                   </div>
                 </div>
               
                 <div class="submit">
                  <button type="submit" class="btn btn-primary pull-right">Save Project</button>
                  </div>
               {{Form::close()}}

               </div>
               </div><hr>
               </div>
               

@include('users.sysAdmin.adminLayouts.topProj')
