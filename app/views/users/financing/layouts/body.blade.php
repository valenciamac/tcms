
   <h2>View Projects</h2>
     <form class="form-inline" action="financing" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" name="search">
        </div>
      </div> 
</form>
<div>
<div class="bg-red mrs">
	Projects<a href="#" data-toggle="modal" data-target="#proj" class="pull-right req">Add Company Income</a>
</div>
         <div class="modal fade" id="proj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">ADD Budget</h4>
                </div>
                <div class="modal-body">
                {{Form::open(array('route' => 'company.store','class'=>'form-horizontal','role'=>'form'))}}
                  <label>Company Income
                  <input type="text" class="form-control" name="company_income">
                  <label>Reason
                  <input type="text" class="form-control" name="reason">


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                {{Form::close()}}
              </div>
            </div>
          </div>

<table class="table table-striped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Project Name</th>
            <th>Location</th>
            <th>Add Budget</th>
            </tr>
            </thead>
            <tbody>
            @foreach($project as $cool)
            <tr>
            <td>{{ $cool->id }}</td>
            <td>{{ $cool->project_name }}</td>
            <td>{{ $cool->location }}</td>
            <td><a href="cool/{{$cool->id}}" class="btn btn-primary  btn-full-width">Add Budget</i></a></td>
            </tr>
            @endforeach
               </tbody>
        </table>
</div>

</div>
</div>
</div>