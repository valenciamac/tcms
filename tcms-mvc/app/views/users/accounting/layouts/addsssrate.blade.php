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

    <h2>Add Hourly Rates</h2>           

    {{Form::open(array('route' => 'ssscontr.store','class'=>'form-horizontal','role'=>'form'))}}
<div class="form-group" style="padding-bhourstom:45px;">
      <div class="form-group">

                <div class="form-group">
                <label class="col-sm-3 control-label" >Range&nbsp;</label>
                <div class="col-sm-6">
                <input name="range" class="form-control">
                </div>
                </div> 
            
                <div class="form-group">
                <label class="col-sm-3 control-label" >Credit&nbsp;</label>
                <div class="col-sm-6">
                <input name="credit" class="form-control" id="hoursrestspecholdrate">
                </div> 
                </div>

                <div class="form-group">
                <label  class="col-sm-3 control-label" >Social Security Employer Contribution&nbsp;</label>
                <div class="col-sm-6">
                <input name="ssempershare" class="form-control" id="hoursregholdrate">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Social Security Employee Contribution&nbsp;</label>
                <div class="col-sm-6">
                <input name="ssempeeshare"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Social Security Total&nbsp;</label>
                <div class="col-sm-6">
                <input name="sstotal"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >EC- Employer Contribution&nbsp;</label>
                <div class="col-sm-6">
                <input name="ecempershare"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Total Employer Contribution&nbsp;</label>
                <div class="col-sm-6">
                <input name="tcempershare"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Total Employee Contribution&nbsp;</label>
                <div class="col-sm-6">
                <input name="tcempeeshare"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Total Cont - Total Contribution&nbsp;</label>
                <div class="col-sm-6">
                <input name="tctotal"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Total Contribution&nbsp;</label>
                <div class="col-sm-6">
                <input name="totalcontr"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                 <div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>


</div>
{{Form::close()}}      


</div>
</div>
</div>
</div>