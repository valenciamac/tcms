<div class="col-md-9" >
   
   <!-- content here -->
 @if($project->count())
         <table class="table table-striped">
            <thead>
              <tr>
                <th>Project Name</th>
                <th>Description</th>
                <th>stock</th>
              </tr>
            </thead>
            <tbody>
            @foreach($project as $inventory)
              <tr>
                <td>{{ $inventory->project_name }}</td>
                <td>{{ $inventory->location }}</td>
                <td><a href="mrs/{{$inventory->id}}" class="btn btn-primary btn-full-width">View MRS</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
          @else
          <div class="notemp">
            <h3><label>No Items yet</label></h3>
          </div>
          
   @endif
</div>


</div>
</div>
</div>	