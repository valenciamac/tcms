
   
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary"href="rates">
          Create Rates
        </a>
         <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#addphilrate">
          PhilHealth Contribution
        </a>
         <a class="btn btn-primary" href="ratesf">
          Pagibig Contribution
        </a>
         <a class="btn btn-primary" href="ratesg">
          SSS Contribution
        </a>
    <div id="addphilrate" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

    {{Form::open(array('route' => 'phcontr.store','class'=>'form-horizontal','role'=>'form'))}}
<div class="form-group" style="padding-bhourstom:45px;">
      <div class="form-group">

                <div class="form-group">
                <label class="col-sm-3 control-label" >Salary Bracket&nbsp;</label>
                <div class="col-sm-6">
                <input name="salbracket" class="form-control">
                </div>
                </div> 
            
                <div class="form-group">
                <label class="col-sm-3 control-label" >Salary Range Min&nbsp;</label>
                <div class="col-sm-6">
                <input name="salmin" class="form-control" id="hoursrestspecholdrate">
                </div> 
                </div>

                 <div class="form-group">
                <label class="col-sm-3 control-label" >Salary Range Max&nbsp;</label>
                <div class="col-sm-6">
                <input name="salmax" class="form-control" id="hoursrestspecholdrate">
                </div> 
                </div>

                <div class="form-group">
                <label  class="col-sm-3 control-label" >Salary Base&nbsp;</label>
                <div class="col-sm-6">
                <input name="salbase" class="form-control" id="hoursregholdrate">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Total Monthly Premium&nbsp;</label>
                <div class="col-sm-6">
                <input name="tmp"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Employee Share&nbsp;</label>
                <div class="col-sm-6">
                <input name="empeeshare"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-3 control-label" >Employer Share&nbsp;</label>
                <div class="col-sm-6">
                <input name="empershare"class="form-control" id="hoursrestonreghold">
                </div>
                </div>

                 <div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>


</div>
{{Form::close()}}      
<hr>

</div>
</div>
</div>
  @include('users.accounting.layouts.viewPhilhealth')
 