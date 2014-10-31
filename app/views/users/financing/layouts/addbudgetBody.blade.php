<div class="col-md-9" >
   <h2>View Projects</h2>
     <form class="form-inline" action="addbudget" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" name="search">
        </div>
      </div> 
</form>
<table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Project Name</th>
            <th>Location</th>
            <th>Add Budget</th>
            <th>View Graph</th>
            </tr>
            </thead>
            <tbody>
            @foreach($project as $cool)
            <tr>
            <td>{{ $cool->id }}</td>
            <td>{{ $cool->project_name }}</td>
            <td>{{ $cool->location }}</td>
            <td><a href="cool/{{$cool->id}}" class="btn btn-primary  btn-full-width">Add Budget</i></a></td>
             <td><a href="cooler/{{$cool->id}}" class="btn btn-primary btn-full-width">View Graph</a></td>
            </tr>
            @endforeach
               </tbody>
        </table>


</div>
</div>
</div>
</div>