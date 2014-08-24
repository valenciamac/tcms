<div class="col-md-9">
   
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#rates">
          Create Rates
        </a>
         <a class="btn btn-primary" href="ratese">
          PhilHealth Contribution
        </a>
         <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#pagibig">
          Pagibig Contribution
        </a>
         <a class="btn btn-primary" href="ratesg">
          SSS Contribution
        </a>
    <div id="rates" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
    {{Form::open(array('route' => 'rate.store','class'=>'form-horizontal','role'=>'form'))}}
<div class="form-group" style="padding-bottom:45px;">
      <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Reg. OT Pay:&nbsp;</label>
                <div class="col-sm-6">
                <input name="otpayrate" class="form-control" id="otpayrate">
                </div>
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Restday OT/Speacial Holiday OT:&nbsp;</label>
                <div class="col-sm-6">
                <input name="otrestnspecholdrate" class="form-control" id="otrestnspecholdrate">
                </div>
                </div> 
            
                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Restday OT on Speacial Holiday:&nbsp;</label>
                <div class="col-sm-6">
                <input name="otrestspecholdrate" class="form-control" id="otrestspecholdrate">
                </div> 
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Regular Holiday OT:&nbsp;</label>
                <div class="col-sm-6">
                <input name="otregholdrate" class="form-control" id="otregholdrate">
                </div>
                </div>

                <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Restday OT on Regular Holiday OT:&nbsp;</label>
                <div class="col-sm-6">
                <input name="otrestonreghold" class="form-control" id="otrestonreghold">
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
<div>
     @include('users.accounting.layouts.viewRate')
    </div>
   
</div>
</div>