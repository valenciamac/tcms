
   <h3>View Projects</h3>
     <form class="form-inline" action="financing" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" name="search">
        </div>
      </div> 
</form>

<table class="table table-striped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Project Name</th>
            <th>Location</th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody id="range">
            @foreach($project as $jectpro)
            <tr>
            <td>{{ $jectpro->id }}</td>
            <td>{{ $jectpro->project_name }}</td>
            <td>{{ $jectpro->location }}</td>
            <td><a href="ject/{{$jectpro->id}}" class="btn btn-primary ">View project models</i></a>
           
           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#newModel{{$jectpro->id}}">
            <i class="fa fa-plus"></i>
          </a> 
             <div class="modal fade" id="newModel{{$jectpro->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">ADD MODEL</h4>
                </div>
                <div class="modal-body">
                {{Form::open(array('route' => 'modelhouse.store','class'=>'form-horizontal','role'=>'form'))}}
                 <input type="hidden" class="form-control" value="{{$jectpro->id}}" name="projectid">
                 <input type="text" class="form-control" name="modelName" placeholder="Model Name...">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {{Form::close()}}
              </div>
            </div>
          </div>
          </td>
            </tr>
            @endforeach
               </tbody>
        </table>