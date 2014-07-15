<div class="col-md-9">
   <!-- content here -->
   @if ($employee->count())
   @foreach ($employee as $emp1)
   <form class ="form-horizontal" role="form">
      <div class="form-horizontal" style="padding-top:40px;">
         <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >ID No:&nbsp;</label>
            <div class="col-sm-4">
               <input name="empId" class="form-control" id="empId" value="{{$emp1->id}}" disabled>
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
   </form>
   @endforeach
   <b>
      <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
   </b>
   <form class="form-horizontal" role="form" id="compute">
      <div class="form-group" style="padding-bottom:45px;">
         <div class="form-inline">
            <label for="fname" class="col-sm-3 control-label" >Pay Date:</label> 
            <div class="input-append date col-sm-3"> 
               <input id="paydate" type="text" class="form-control input-sm datepicker maxwidth" value="<?php echo date("m/d/Y") ?>" name="paydate" required>
            </div>
         </div>
         <div class="form-group">
            <label for="fname" class="col-sm-3 control-label" >Withholding Tax:&nbsp;</label>
            <div class="col-sm-3">
               <input name="wtax" type="text" class="form-control input-sm" id"wtax">
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
               <input name="ssscont" type="text" class="form-control input-sm" id="ssscont">
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
               <input name="phcont" type="text" class="form-control input-sm" id="phcont">
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
               <input name="pgibigcont" type="text" class="form-control input-sm" id="pgibigcont">
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
               <input name="sssloan" type="text" class="form-control input-sm" id="sssloan">
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
               <input name="pgibigloan" type="text" class="form-control input-sm" id="pgibigloan">
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
               <input name="cashadv" type="text" class="form-control input-sm" id="cashadv">
            </div>
         </div>
         <div class="form-inline">
            <label for="fname" class="col-sm-3 control-label" >Special Holiday Pay:&nbsp;</label>
            <div class="col-sm-3">
               <input name="specholdpay" type="text" class="form-control input-sm" id="specholdpay" onkeyup="sum7()">
            </div>
         </div>
         <div class="form-group">
            <label for="fname" class="col-sm-3 control-label">Net Income:&nbsp;</label>
            <div class="col-sm-3">
               <input name="income" type="text" class="form-control input-sm" id="net" disabled>
            </div>
         </div>
         <input type="hidden" id="val1"/>
         <input type="hidden" id="val2"/>
         <input type="hidden" id="val3"/>
         <input type="hidden" id="val4"/>
         <input type="hidden" id="val5"/>
         <input type="hidden" id="val6"/>
         <input type="hidden" id="val7"/>
         <!--  <input type="button" name="Sumbit" value="Click here" onclick="addNumbers()"/> -->
         <div class="form-group">
            <button type="button" id="submit-btn" class="btn btn-primary btn-block pull-right" style="width:35%;" onclick="addNumbers()">Compute &nbsp; <i class="fa fa-plus"></i></button>
         </div>
      </div>
   </form>
   <!-- <button type="back" class="btn btn-primary">Back</button> -->
   @endif
</div>
</div>
</div>
</div>