<table class="table table-striped">
	<thead>
	<tr>
		<th>PO#</th>
		<th>Project</th>
		<th>Supplier</th>
		<th>Deliver to</th>
		<th>Date created</th>
		<th>Due date</th>
	</tr>
	</thead>
	<tbody>
	@foreach($due as $duedate)
		<tr>
			<td>{{$duedate->po}}</td>
			<td>{{$duedate->project->project_name}}</td>
			<td>{{$duedate->suppler_name}}</td>
			<td>{{$duedate->deliverTo}}</td>
			<td>{{$duedate->created_at->toFormattedDateString()}}</td>
			<td>{{$duedate->due_date->diffForHumans()}}</td>
		</tr>
	@endforeach
	</tbody>
</table>