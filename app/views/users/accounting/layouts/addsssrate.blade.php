<div class="col-md-9">
   
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" href="rates">
          Create Rates
        </a>
         <a class="btn btn-primary"  href="ratese">
          PhilHealth Contribution
        </a>
         <a class="btn btn-primary" href="ratesf">
          Pagibig Contribution
        </a>
         <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#sss">
          SSS Contribution
        </a>
    <div id="sss" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>        

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
<div>
      @include('users.accounting.layouts.viewSss')

</div>
</div>
</div>