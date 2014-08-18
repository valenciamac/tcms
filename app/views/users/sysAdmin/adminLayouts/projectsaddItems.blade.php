   <!-- content here -->
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#adduser">
          Add New Items
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
    @foreach($project as $addproject)
         {{$addproject->id}}
         {{$addproject->project_name}}
         {{$addproject->location}}
         {{$addproject->created_at->toFormattedDateString()}}
         <table class="table table-bordered">
            <thead>
              <tr>
                <th>Item Name</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
            @foreach($standard_item as $sitem)
              <tr>
                <td>{{ $sitem->sname }}</td>
                @foreach($standard_desc as $gitem)
                <td>{{ $gitem->sdesc }}</td>
                @endforeach
              </tr>
            @endforeach
            
            </tbody>
    </table>
    @endforeach