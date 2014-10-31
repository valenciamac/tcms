<div class="col-md-9">
   @foreach($projprs as $proprs)
   <h4>{{ucwords($proprs->project_name)}}</h4>
   <p>{{ucwords($proprs->location)}}</p>
   <table class="table table-striped">
      <thead>
        <tr>
          <th>PRS #</th>
          <th>Address</th>
          <th>Date created</th>
          <th>Total Price</th>
          <th>More Info</th>
        </tr>
      </thead>
      		
      @foreach($proprs->prs as $prsdata)
      <tbody>
      	<td>{{$prsdata->id}}</td>
      	<td>{{ucwords($proprs->location)}}</td>
      	<td>{{$prsdata->created_at->toFormattedDateString()}}</td>
      	<td>To follow </td>
      	<td><a href="../prsitem/{{$prsdata->id}}" class="btn btn-primary">View</a></td>
      </tbody>
      @endforeach
  </table>
	@endforeach
   <a href="../prs" class="btn btn-primary pull-right">Back</a>
</div>