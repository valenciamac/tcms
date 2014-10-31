<table class="table table-striped content" style="font-size:13px;">
      <thead>
         <tr>
            <th>PRS #</th>
            <th>Project</th>
            <th>Location</th>
            <th>Date Created</th>
            <th>Option</th>
         </tr>
      </thead>
      <tbody>
      @foreach($project as $pitem)
        @foreach($pitem->prs as $proprs)
        <tr class="contents">
          <td>{{$proprs->id}}</td>
          <td>{{$pitem->project_name}}</td>
          <td>{{$pitem->location}}</td>
          <td>{{$proprs->created_at}}</td>
          <td>
          <a href="prspo/{{$proprs->id}}" class="btn btn-primary">View PO</a>
          <a href="#" class="btn btn-primary supplier" data-toggle="modal" data-target="#newPO{{$proprs->id}}">Make PO</a></td>
             <!-- MODAL LABOR -->
          <div class="modal fade" id="newPO{{$proprs->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Make Purchase Order</h4>
                </div>
                <div class="modal-body">
                  {{Form::open(array('route' => 'po.store','class'=>'form-horizontal','role'=>'form'))}}
      <div class="row">
         <div class="col-xs-6">
            <label for="exampleInputEmail1">Supplier Name:</label>
          
          @if ($suppliers->count())
            <select required class="form-control input-sm" name="suppler_name">  
            @foreach ($suppliers as $supplier)
              <option>{{$supplier->supplier_name}}</option>
            @endforeach
            </select>
            @else
            <select disabled class="form-control input-sm" >
              <option class="italic">no suppliers yet</option>
            </select>
            @endif
            
         </div>
         <div class="col-xs-6">
            <label>Address:</label>
            <input type="text" required class="form-control input-sm" name="address">
         </div>
         <div class="col-xs-6">
            <label>Terms (Days):</label>
            <input type="text" required class="form-control input-sm" name="terms">
         </div>
         <div class="col-xs-6">
            <label>Description:</label>
            <input type="text" class="form-control input-sm" name="supplier_code">
         </div>
         <div class="col-xs-6">
            <label>Deliver to:</label>
            <input type="text" required class="form-control input-sm" name="deliverTo">
         </div>
            <input type="hidden" readonly class="form-control input-sm" name="prs" value="{{$proprs->id}}">
         <div class="col-xs-6">
            <label>Project Name :</label>
            @if ($project->count())
            <select required class="form-control input-sm" name="proj">  
            @foreach ($project as $proj)
              <option value="{{$proj->id}}">{{$proj->project_name}}</option>
            @endforeach
            </select>
            @else
            <select disabled class="form-control input-sm" >
              <option class="italic">No Projects Yet</option>
            </select>
            @endif
           
         </div>
          
      <!-- button -->
      <div class="submit pull-right">
         <button class="btn btn-primary" type="submit">Save</button>
      </div>
      </div>
      </div><!--tab-pane-->
      
</div>

{{Form::close()}}
<!-- Modal -->
        </div>
        </div>  
         </tr>
         @endforeach
          
          @endforeach
      </tbody>
   </table>
   <a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newSupplier">Add Supplier</a>
    <div class="modal fade" id="newSupplier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Supplier Name</h4>
                </div>
                <div class="modal-body">
                {{Form::open(array('route' => 'supplier.store','class'=>'form-horizontal','role'=>'form'))}}
                  <input type="text" class="form-control" name="supplier">

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                {{Form::close()}}
              </div>
            </div>
          </div>
   <!-- MODAL LABOR -->
          <div class="modal fade" id="newPO{{$proprs->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Make Purchase Order</h4>
                </div>
                <div class="modal-body">
                  {{Form::open(array('route' => 'po.store','class'=>'form-horizontal','role'=>'form'))}}
      <div class="row">
         <div class="col-xs-6">
            <label for="exampleInputEmail1">Supplier Name:</label>
          
          @if ($suppliers->count())
            <select required class="form-control input-sm" name="suppler_name">  
            @foreach ($suppliers as $supplier)
              <option>{{$supplier->supplier_name}}</option>
            @endforeach
            </select>
            @else
            <select disabled class="form-control input-sm" >
              <option class="italic">no suppliers yet</option>
            </select>
            @endif
            
         </div>
         <div class="col-xs-6">
            <label>Address:</label>
            <input type="text" required class="form-control input-sm" name="address">
         </div>
         <div class="col-xs-6">
            <label>Terms (Days):</label>
            <input type="text" required class="form-control input-sm" name="terms">
         </div>
         <div class="col-xs-6">
            <label>Description:</label>
            <input type="text" class="form-control input-sm" name="supplier_code">
         </div>
         <div class="col-xs-6">
            <label>Deliver to:</label>
            <input type="text" required class="form-control input-sm" name="deliverTo">
         </div>
         <div class="col-xs-6">
            <label>PO #: </label>
            <input type="text" required class="form-control input-sm" name="po" class="inputext" id="po">
         </div>
         <div class="col-xs-6">
            <label>PRS #:</label>
            <input type="text" class="form-control input-sm" name="prs">
         </div>
         <div class="col-xs-6">
            <label>Project Name :</label>
            @if ($project->count())
            <select required class="form-control input-sm" name="proj">  
            @foreach ($project as $proj)
              <option value="{{$proj->id}}">{{$proj->project_name}}</option>
            @endforeach
            </select>
            @else
            <select disabled class="form-control input-sm" >
              <option class="italic">No Projects Yet</option>
            </select>
            @endif
           
         </div>
          
      <!-- button -->
      <div class="submit pull-right">
         <button class="btn btn-primary" type="submit">Save</button>
      </div>
      </div>
      </div><!--tab-pane-->
      
</div>

{{Form::close()}}
<!-- Modal -->
        </div>
    <!-- END MODAL LABOR -->