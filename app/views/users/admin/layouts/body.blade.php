   <!-- content here -->
      <div class="span7">
            
            
            
            <h3>Material Requests</h3>
            <div class="row">
  <div class="col-xs-5">
    <input type="text" id="searchMrs" class="form-control col-md-2" placeholder="search project..." >
  </div>
  </div>
               <br>
               <div id="mrsproj">
@foreach($proj as $pro)
<div><div class="bg-red mrs">{{ucwords($pro->project_name)}}<a href="#" data-toggle="modal" data-target="#addmrs{{$pro->id}}" class="pull-right req">Request</a>
<a href="reject/{{$pro->id}}" class="pull-right req">Reject</a>
</div>

@if($pro->mrs->count())
<table class="table table-striped">
   <thead>
      <tr>
         <th>MRS Number</th>
         <th>Number of items</th>
         <th>Unit</th>
         <th>Date Created</th>
         <th>Details</th>
      </tr>                
   </thead>
   
   <tbody>
   @foreach($pro->mrs as $mrss)
  <tr>
    <td>{{$mrss->id}}</td>
    <td>{{$mrss->mrsinv->count()}}</td>
    <td>{{$mrss->unit}}</td>
    <td>{{$mrss->created_at->toFormattedDateString()}}</td>
    <td><a href="view/{{$pro->id}}/{{$mrss->id}}" style="color:#000;">More</a></td>
  </tr> 
  @endforeach
   
   </tbody>

</table>
@else
<center><label>No Request yet on this project.</label></center>
@endif
</div>
<!-- Modal -->
            <div class="modal fade" id="addmrs{{$pro->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input the Unit you are requesting for:</h4>
                  </div>
                  <div class="modal-body">
                    {{Form::open(array('route' => 'mrs.store','class'=>'form-horizontal','role'=>'form'))}}

                       <select name="unit">
                         @foreach($pro->modelhouse as $model)
                          <option>{{$model->modelName}}</option>
                         @endforeach
                       </select>
                       <input type="hidden" readonly class="form-control" name="projid" value="{{$pro->id}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
            </div>
@endforeach
</div>
</div>