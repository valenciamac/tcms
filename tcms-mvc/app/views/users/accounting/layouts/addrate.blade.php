<div class="col-md-9">
    <ul class="nav nav-tabs nav-justified">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesb">Rates<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratesb">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="rates">Change Rates</a></li>
    </ul>
    </li>

    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesc">Hourly Rates<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratesc">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="ratesd">Change Rates</a></li>
    </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesc">PhilHealth Contribution<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratese">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="rates2">Change Rates</a></li>
    </ul>
    </li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="ratesc">SSS Contribution<span class="caret"></span><span class="sr-only">Toggle Dropdown</span></a>
       <ul class="dropdown-menu">
           <li><a href="ratesg">Add Rates</a></li>
           <li class="divider"></li>
           <li><a href="rates3">Change Rates</a></li>
    </ul>
    </li>
    <h2>Add Overtime Rates</h2>           

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

</div>
</div>
</div>
</div>