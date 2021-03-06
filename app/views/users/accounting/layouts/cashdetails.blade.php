<div class="panel-group" id="accordion">
@foreach($cashvouchers as $vouch)
        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#rates">Labor</a>
        <a class="btn btn-primary" href="../cashdetails3/{{$vouch->checkno}}">Materials</a>

   <a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newlabor">Add a New Labor</a>
   <!-- <a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newacctitle">Add a New Account Title</a> -->

    <div id="rates" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
      <div class="form-group" style="padding-bottom:45px;">
      <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Department</th>
               <th>Position</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
          @foreach($employee as $emp)
           <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ ucwords($emp->fname) }} {{ ucwords($emp->mname) }} {{ ucwords($emp->lname) }}</td>
                <td>{{ ucwords($emp->department) }}</td>
                <td>{{ ucwords($emp->position) }}</td>
                <td><a href="#" class="btn-primary supplier" data-toggle="modal" data-target="#newcash{{$emp->id}}">Add</a></td>
            </tr>
          <!-- MODAL VOUCHER -->
          <div class="modal fade" id="newcash{{$emp->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Add </h4>
                </div>
                <div class="modal-body">
                {{Form::open(array('route' => 'cashdetails.store','class'=>'form-horizontal','role'=>'form'))}}

                <input type="hidden" value="{{$vouch->checkno}}" name="cashvouchers_checkno" readonly="readonly">
                

                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Payee:&nbsp;</label>
                <input name="payee" class="form-control" id="payee" value="{{ ucwords($emp->fname) }} {{ ucwords($emp->mname) }} {{ ucwords($emp->lname) }}" readonly="readonly">
                </div>
      
                <div class="row">
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Labor:&nbsp;</label>
                @if ($labor->count())
                <select class="form-control input-sm" name="labor">  
                <option disabled="disabled" selected>Choose Labor</option>
                @foreach ($labor as $lab)
                <option>{{$lab->labor}}</option>
                @endforeach
                </select>
                @else
                <select disabled class="form-control input-sm" >
                <option class="italic">No labor(s) yet</option>
                </select>
                @endif
                </div>
                </div>

                <div class="col-sm-4">
                <label for="fname" class="col-sm-3 control-label" >Description:&nbsp;</label>
                <input name="descr" class="form-control" id="payee">
                </div>

                <div class="col-sm-4">
                <label for="amount" class="col-sm-3 control-label" >Amount:&nbsp;</label>
                <input name="amount" class="form-control" id="amt" onkeyup="amtless();copy()">
                </div>
                
                <div class="row">
                <div class="col-sm-4">
                <label for="fname" class="col-sm-3 control-label" >Less:&nbsp;</label>
                <input name="less" class="form-control" id="les" value="" onkeyup="amtless();copy()">
                </div>
                </div>
      
                <!-- <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
                
                @if ($accounttitle->count())
                <select class="form-control input-sm" name="acctitle1">  
                <option disabled="disabled" selected>Choose Account</option>
                @foreach ($accounttitle as $acctitle)
                <option>{{$acctitle->account}}</option>
                @endforeach
                </select>
                @else
                <select disabled class="form-control input-sm" >
                <option class="italic">No account(s) yet</option>
                </select>
                @endif
                </div> -->
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
                <input name="acctitle1" class="form-control" id="payee" value="SubCon" readonly="readonly">
                </div>

                <div class="row">
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Debit:&nbsp;</label>
                <input name="debit" class="form-control" id="debit" readonly="readonly">
                </div>
                </div>
     
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Account:&nbsp;</label>
                <input name="acctitle2" class="form-control" id="payee" value="Cash in Bank" readonly="readonly" >
                </div>

                <div class="row">
                <div class="col-sm-6">
                <label for="fname" class="col-sm-3 control-label" >Credit:&nbsp;</label>
                <input name="credit" class="form-control" id="credit" readonly="readonly">
                </div>
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary"> Save</button>
                </div>
                {{Form::close()}}
              </div>
            </div>
          </div>
          <!-- END MODAL VOUCHER -->
          @endforeach

          </tbody>
        </table>
   
      </div>
      <hr>
      </div>
    </div>

    <table class="table table-bordered content" style="font-size:13px; margin-top:20px">
      <thead>
         <tr>
            <th style="text-align:center;">No</th>
            <th style="text-align:center;">Payee</th>
            <th style="text-align:center;">Labor</th>
            <th style="text-align:center;">Description</th>
            <th style="text-align:center;">Amount</th>
            <th style="text-align:center;">Less</th>
            <th style="text-align:center;">Total</th>
         </tr>
      </thead>
       <tbody>
        <tr class="contents">
        @foreach($cashitem as $vitem)
          <td>{{$vitem->cashvouchers_checkno}}</td>
          <td>{{$vitem->payee}}</td>
          <td>{{$vitem->labor}}</td>
          <td>{{$vitem->descr}}</td>
          <td>{{$vitem->amount}}</td>
          <td>{{$vitem->less}}</td>
         </tr>
         @endforeach
      </tbody>
    </table>
   <div class="pull-right" style="margin-bottom:50px;">
        <a href="../cashvouchers" class="btn btn-primary">Done</a>
      </div>
      @endforeach
  </div>
</div>

</div>
</div>

<!-- MODAL LABOR -->
          <div class="modal fade" id="newlabor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Labor Name</h4>
                </div>
                <div class="modal-body">
                {{Form::open(array('route' => 'labor.store','class'=>'form-horizontal','role'=>'form'))}}
                  <input name="labor" class="form-control" id="bname">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary"> Save</button>
                </div>
                {{Form::close()}}
              </div>
            </div>
          </div>
    <!-- END MODAL LABOR -->
</div>
</div>
</div>
</div>