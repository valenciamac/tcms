<div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#rates">
    Cash Vouchers
  </a>
  <a class="btn btn-primary" href="checkvouchers">
    Check Vouchers
  </a>

    <div id="rates" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
    {{Form::open(array('route' => 'cashvouchers.store','class'=>'form-horizontal','role'=>'form'))}}
<div class="form-group" style="padding-bottom:45px;">
      <div class="form-group">
              <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Check No:&nbsp;</label>
                <div class="col-sm-6">
                <input name="checkno" class="form-control" id="checkno">
                </div>
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Receive From:&nbsp;</label>
                <div class="col-sm-6">
                <select name="rfrom" class="form-control" id="department">
                <option value="Engrams Construction">Engrams Construction</option>
                <option value="St. Jude Trading & Construction">St. Jude Trading & Construction</option>
                </select>
                </div> 
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Receive Payment By:&nbsp;</label>
                <div class="col-sm-6">
                <input name="rpb" class="form-control" id="rpb">
                </div>
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Prepared By:&nbsp;</label>
                <div class="col-sm-6">
                <input name="prepared" class="form-control" id="prepared" value="{{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}" readonly="readonly">
                </div>
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Checked By:&nbsp;</label>
                <div class="col-sm-6">
                <input name="checked" class="form-control" id="checked">
                </div>
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Approved By:&nbsp;</label>
                <div class="col-sm-6">
                <input name="approved" class="form-control" id="approved" value="Ramil M. Naraga" readonly="readonly">
                </div>
                </div>


      <div class="form-group">
      <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:35%;">Save &nbsp; <i class="fa fa-save"></i></button>
      </div>



</div>
{{Form::close()}}


<hr>


</div>
</div>
</div>
<div>
     @include('users.accounting.layouts.viewcash')
    </div>
</div>
</div>

