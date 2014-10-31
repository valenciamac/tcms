<h2>View Model Per Project</h2>
     <form class="form-inline" action="monthly" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control"  type="text" id="searchmonth" placeholder="search" name="search">
        </div>
      </div> 
</form>
<table class="table table-bordered table-hover" style="font-size:13px;">
 <thead>
            <tr>
            <th>Project Name</th>
            <th>Location</th>
            <th>Model Name</th>
            <th>Option</th>
            </tr>
            </thead>
 <tbody>
 		<tr>
@foreach($modelhouse as $house)
<td>{{$house->project->project_name}}</td>
<td>{{$house->project->location}}</td>
<td>{{$house->modelName}}</td>
 <td><a href="../bahay/{{$house->id}}" class="btn btn-primary ">Edit BOM</i></a>
<a href="../bahay/{{$house->id}}/view" class="btn btn-primary">View Bom</a>
 </tr></td>
@endforeach
</tbody>
</table>
