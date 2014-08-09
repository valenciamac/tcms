<div class="col-md-9">


   {{Form::open(array('route' => 'payroll.store','class'=>'form-horizontal','role'=>'form'))}}
   <!-- content here -->
   @if ($employee->count())
   @foreach ($employee as $emp1)
      <div class="form-horizontal" style="padding-top:40px;">
         <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >ID No:&nbsp;</label>
            <div class="col-sm-4">
               <input name="empId" class="form-control" id="empId" value="{{$emp1->id}}" readonly="readonly" class="inputext">
            </div>
         </div>
         <div class="form-inline">
            <label for="fname" class="col-sm-3 control-label" >Department:&nbsp;</label>
            <div class="col-sm-3">
               <input name="department" class="form-control" id="department" value="{{ ucwords($emp1->department) }}" disabled>
            </div>
         </div>
         <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >Position:&nbsp;</label>
            <div class="col-sm-3">
               <input name="position" class="form-control" id="fname" value="{{ ucwords($emp1->position) }}" disabled>
            </div>
         </div>
         <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >Employee Name:&nbsp;</label>
            <div class="col-sm-9">
               <input name="fname" class="form-control" id="fname" value="{{ ucwords($emp1->fname) }} {{ ucwords($emp1->mname) }} {{ ucwords($emp1->lname) }}" disabled>
            </div>
         </div>
         <div class="form-inline">
            <label for="fname" class="col-sm-3 control-label" >Basic Salary:&nbsp;</label>
            <div class="col-sm-3">
               <input name="rate" class="form-control" id="basic" value="{{$emp1->basic}}" disabled>
            </div>
         </div>
         <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >Rate:&nbsp;</label>
            <div class="col-sm-3">
               <input name="rate" class="form-control" id="rate" value="{{$emp1->rate}}" disabled>
            </div>
         </div>
         <div class="form-group">
            <input name="days" type="hidden" class="form-control input-sm" id="days" value="{{$emp1->days}}">
         </div>
      </div>
   @endforeach
   <b>
      <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
   </b>
   
      <div class="form-group" style="padding-bottom:45px;">
         <input type="hidden" id="val1"/>
        <input type="hidden" id="val2"/>
        <input type="hidden" id="val3"/>
        <input type="hidden" id="val4"/>
        <input type="hidden" id="val5"/>
        <input type="hidden" id="val6"/>
        <input type="hidden" id="val7"/>
        <input type="hidden" id="val8"/>
        <input type="hidden" id="val9"/>
        <input type="hidden" id="val10"/>
        <input type="hidden" id="val11"/>
        <input type="hidden" id="val12"/>
        <input type="hidden" id="val13"/>
        <div class="form-inline">
                    <label for="fname" class="col-sm-3 control-label" >Pay Date (START):</label> 
                    <div class="input-append date col-sm-3"> 
                            <input id="paydate" type="text" class="form-control input-sm datepicker maxwidth" value="<?php echo date("Y/m/d") ?>" name="paydate" required>
            </div>
            </div>
           <div class="form-group">
                    <label for="fname" class="col-sm-3 control-label" >Pay Date (END):</label> 
                    <div class="input-append date col-sm-3"> 
                            <input id="paydateend" type="text" class="form-control input-sm datepicker maxwidth" value="<?php echo date("Y/m/d") ?>" name="paydateend" required>
            </div>
            </div>
           <div class="form-inline">
                <label for="fname" class="col-sm-3 control-label" >Late/Under Time Hours:&nbsp;</label>
                <div class="col-sm-3">
                <input name="lateunder" type="text" class="form-control input-sm" id="lateunder" onkeyup="sum9()">
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >SSS Contribution:&nbsp;</label>
                <div class="col-sm-3">
                <input name="ssscont" type="text" class="form-control input-sm" id="ssscont" onkeyup="sss()">
            </div>
            </div>

            <div class="form-inline">
                <label for="absent" class="col-sm-3 control-label" >Absences:&nbsp;</label>
                <div class="col-sm-3">
                <input name="absent" type="text" class="form-control input-sm" id="absent" onkeyup="sum4()">
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Philhealth Contribution:&nbsp;</label>
                <div class="col-sm-3">
                <input name="phcont" type="text" class="form-control input-sm" id="phcont" onkeyup="philhealth()">
            </div>
            </div>

            <div class="form-inline">
                <label for="fname" class="col-sm-3 control-label" >Reg OT Pay:&nbsp;</label>
                <div class="col-sm-3">
                <input name="regotpay" type="text" class="form-control input-sm" id="regotpay" onkeyup="sum3()">
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Pag-ibig Contribution:&nbsp;</label>
                <div class="col-sm-3">
                <input name="pgibigcont" type="text" class="form-control input-sm" id="pgibigcont" onkeyup="pagibig()">
            </div>
            </div>

            <div class="form-inline">
                <label for="fname" class="col-sm-3 control-label" >Reg Holiday Pay:&nbsp;</label>
                <div class="col-sm-3">
                <input name="regholdpay" type="text" class="form-control input-sm" id="regholdpay" onkeyup="sum5()">
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >SSS Loan:&nbsp;</label>
                <div class="col-sm-3">
                <input name="ssloan" type="text" class="form-control input-sm" id="ssloan" onkeyup="sssloan()">
            </div>
            </div>

            <div class="form-inline">
                <label for="fname" class="col-sm-3 control-label" >Reg Holiday OT Pay:&nbsp;</label>
                <div class="col-sm-3">
                <input name="regholdotpay" type="text" class="form-control input-sm" id="regholdotpay" onkeyup="sum8()">
            </div>
            </div>

            <div class="form-group">
                <label for="pgibigloan" class="col-sm-3 control-label" >Pag-ibig Loan:&nbsp;</label>
                <div class="col-sm-3">
                <input name="pgibigloan" type="text" class="form-control input-sm" id="pgibigloan" onkeyup="pagibigloan()">
            </div>
            </div>

            <div class="form-inline"> 
                <label for="fname" class="col-sm-3 control-label" >Restday Pay:&nbsp;</label>
                <div class="col-sm-3">
                <input name="restpay" type="text" class="form-control input-sm" id="restpay" onkeyup="sum6()">
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Cash Advance:&nbsp;</label>
                <div class="col-sm-3">
                <input name="advance" type="text" class="form-control input-sm" id="advance" onkeyup="cashadv()">
            </div>
            </div>


            <div class="form-inline">
                <label for="fname" class="col-sm-3 control-label" >Special Holiday Pay:&nbsp;</label>
                <div class="col-sm-3">
                <input name="specholdpay" type="text" class="form-control input-sm" id="specholdpay" onkeyup="sum7(); wtax()">
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Withholding Tax:&nbsp;</label>
                <div class="col-sm-3">
                <input name="wtax" type="text" class="form-control input-sm" id"tax">
            </div>
            </div>

            <div class="form-inline">
                <label for="fname" class="col-sm-3 control-label">Gross Pay:&nbsp;</label>
                <div class="col-sm-3">
                <input name="gross" type="text" class="form-control input-sm" id="gross" readonly="readonly">
            </div>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label">Net Pay:&nbsp;</label>
                <div class="col-sm-3">
                <input name="income" type="text" class="form-control input-sm" id="net" readonly="readonly">
            </div>
            </div>
         <!--  <input type="button" name="Sumbit" value="Click here" onclick="addNumbers()"/> -->
         <div class="pull-right" style="padding-top:20px;">
            <button type="button" class="btn btn-primary btn-block pull-right" style="width:35%;" onclick="addNumbers();addNumbers2();">Compute &nbsp; <i class="fa fa-plus"></i></button>
            <input type="submit" class="btn btn-primary " value="Save">
            </div>
      </div>
   <!-- <button type="back" class="btn btn-primary">Back</button> -->
   @endif
{{Form::close()}}
</div>
</div>
</div>
</div>