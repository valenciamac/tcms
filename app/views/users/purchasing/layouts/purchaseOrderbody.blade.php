<table class="table table-striped">
  <thead>
    <tr>
      <th>Project Name</th>
      <th>Location</th>
      <th>Date Started</th>
      <th>Total PO</th>
      <th>More info</th>
    </tr>
  </thead>
  <tbody>
  @foreach($project as $pro)
    <tr>
      <td>{{ucwords($pro->project_name)}}</td>
      <td>{{ucwords($pro->location)}}</td>
      <td>{{ucwords($pro->created_at->toFormattedDateString())}}</td>
      <td>{{$pro->pos->count()}}</td>
      <td><a href="projectpo/{{$pro->id}}" class="btn btn-primary">More info</a></td>
    </tr>
@endforeach
  </tbody>
</table>

