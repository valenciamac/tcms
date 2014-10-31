
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" href="rates">
          Create Rates
        </a>
         <a class="btn btn-primary"  href="ratese">
          PhilHealth Contribution
        </a>
         <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#pagibig">
          Pagibig Contribution
        </a>
         <a class="btn btn-primary" href="ratesg">
          SSS Contribution
        </a>
    <div id="pagibig" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>        

    {{Form::open(array('route' => 'pagibig.store','class'=>'form-horizontal','role'=>'form'))}}
<div class="form-group" style="padding-bhourstom:45px;">
      <div class="form-group">

                <div class="form-group">
                <label class="col-sm-3 control-label" >Pagibig Min</label>
                <div class="col-sm-6">
                <input name="pagibigmin" class="form-control">
                </div>
                </div> 
                
                <div class="form-group">
                <label class="col-sm-3 control-label" >Pagibig Max</label>
                <div class="col-sm-6">
                <input name="pagibigmax" class="form-control">
                </div>
                </div> 

                <div class="form-group">
                <label class="col-sm-3 control-label" >Employee Share</label>
                <div class="col-sm-6">
                <input name="employeeshare" class="form-control" id="hoursrestspecholdrate">
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
      @include('users.accounting.layouts.viewPagibig')
