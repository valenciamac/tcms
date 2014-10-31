
<b><h5>View Model Per Project</h5></b>

<table class="table table-bordered" style="font-size:13px;">
 <thead>
            <tr>
            <th>Project Name</th>
            <th>Location</th>
            <th>Model Name</th>
            <th>Option</th>
            </tr>
            </thead>

<tbody>
@foreach($modelhouse as $h)
			<tr>

			<td>{{$h->project->project_name}}</td>
			<td>{{$h->project->location}}</td>
			<td>{{$h->modelName}}</td>
			 {{Form::open(array('route' => 'prs.store','class'=>'form-horizontal','role'=>'form'))}}
            <input type="hidden" class="form-control" value="{{$h->id}}" name="modelId">
            <input type="hidden" class="form-control" value="{{$h->project->id}}" name="project_id">
      		
			<td><button type="submit" class="btn btn-primary" >Add PRS</a>

		
               

    
                {{Form::close()}}
           
			</td>
			</tr>
			@endforeach
			</tbody>
			</table>