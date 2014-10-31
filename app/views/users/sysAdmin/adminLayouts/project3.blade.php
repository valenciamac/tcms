            
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
               

<table class="table table-striped">
   <thead>
      <tr>
         <th>Status</th>
         <th>Project #</th>
         <th>Name</th>
         <th>Location</th>
         <th>Date Started</th>
         <th>PO</th>
         <th>Inventory</th>
      </tr>                
   </thead>
   
   <tbody id="searchproj">
   
   @foreach($project as $proj)
   <tr class="contents">
      @if(empty($proj->status))
      <td><span class="label label-primary">On Progress</span></td>
      @else
         <td><span class="label label-danger">Finished</span></td>   
      @endif   
      <td class="full">{{$proj->id}}</td>
      <td class="full">{{$proj->project_name}}</td>              
      <td class="full">{{$proj->location}}</td>
      <td class="full">{{$proj->created_at->toFormattedDateString()}}</td>
      <td class="full">{{$proj->pos->count()}}</td>
      @if(empty($proj->status))
      <td class="full"><a href="inventory/{{$proj->id}}" class="mybtn btn-primary btn-full-width">View</a></td>
      @else
         <td class="full"><a href="inventory/{{$proj->id}}" class="mybtn btn-default btn-full-width disabled" >View</a></td>
      @endif 
      
   </tr>
   @endforeach
   </tbody>
</table>
{{HTML::script('js/jquery-1.9.1.min.js')}}
{{HTML::script('js/jquery.fastLiveFilter.js')}}

<script type="text/javascript">
      $(document).ready(function(){
       $(function() {   
           $('#projsearch').fastLiveFilter('#searchproj');
             });
         });
</script>