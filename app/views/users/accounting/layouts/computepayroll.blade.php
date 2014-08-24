<div class="col-md-9">
   {{Form::open(array('route' => 'payroll.store','class'=>'form-horizontal','role'=>'form'))}}
   <!-- content here -->
   @if ($employee->count())
   @foreach ($employee as $emp1)
   <div class="row">
            <div class="col-sm-4">
            <label >ID No:</label>
            <input name="empId" class="form-control" id="empId" value="{{$emp1->id}}" readonly="readonly" class="inputext">
            </div>
            </div>
    <div class="row">
         <div class="col-sm-4">
            <label  >Department:</label>
            <input name="department" class="form-control" id="department" value="{{ ucwords($emp1->department) }}" disabled>
            </div>
         <div class="col-sm-4">
            <label >Position:</label>
            <input name="position" class="form-control" id="fname" value="{{ ucwords($emp1->position) }}" disabled>
            </div>
         <div class="col-sm-4">
            <label  >Employee Name:</label>
            <input name="fname" class="form-control" id="fname" value="{{ ucwords($emp1->fname) }} {{ ucwords($emp1->mname) }} {{ ucwords($emp1->lname) }}" disabled>
            </div>
    </div>
    <div class="row">
         <div class="col-sm-4">
            <label  >Basic Salary:</label>
            <input name="rate" class="form-control" id="basic" value="{{$emp1->basic}}" readonly="readonly">
            </div>
         <div class="col-sm-4">
            <label  >Rate:</label>
            <input name="rate" class="form-control" id="rate" value="{{$emp1->rate}}" disabled>
            </div>
         <div class="col-sm-4">
            <input name="days" type="text" class="form-control input-sm" id="days" value="{{$emp1->days}}">
         </div>
         </div>
       
      
   @endforeach
   &nbsp;
   <b>
      <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
   </b>
   
        <input type="text" id="val1"/>
        <input type="text" id="val2"/>
        <input type="text" id="val3"/>
        <input type="text" id="val4"/>
        <input type="text" id="val5"/>
        <input type="text" id="val6"/>
        <input type="text" id="val7"/>
        <input type="text" id="val8"/>
        <div class="row">
        <div class="col-sm-4">
                    <label>Pay Date (START):</label> 
                    <div class="input-append date"> 
                            <input id="datepicker1"type="text" class="form-control input-sm datepicker maxwidth" value="<?php echo date("Y/m/d") ?>" name="paydate" required>
            </div>
            </div>
            <div class="col-sm-4">
                    <label >Pay Date (END):</label> 
                    <div class="input-append date"> 
                            <input id="datepicker2" type="text" class="form-control input-sm datepicker maxwidth" value="<?php echo date("Y/m/d") ?>" name="paydateend" required>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <label  >Late/Under Time Hours:</label>
                <input name="lateunder" type="text" class="form-control input-sm maxwidth" id="lateunder" onkeyup="sum9()">
            </div>

            <div class="col-sm-4">
                <label >Absences:</label>
                <input name="absent" type="text" class="form-control input-sm" id="absent" onkeyup="sum4()">
            </div>

            <div class="col-sm-4">
                <label >Cash Advance:</label>
                <input name="advance" type="text" class="form-control input-sm" id="advance" onkeyup="cashadv()">
            </div>
            </div>
            <div class= "row">
            
            <div class="col-sm-4">
                <label>Philhealth Contribution:</label>
                <input name="phcont" type="text" class="form-control input-sm" id="phcont" onkeyload="philhealth()" readonly="readonly" >
            </div>

            <div class="col-sm-4">
                <label >Pag-ibig Contribution:</label>
                <input name="pgibigcont" type="text" class="form-control input-sm" id="pgibigcont" onkeyload="pagibig()" readonly="readonly">
            </div>

        
             

            <div class="col-sm-4">
                <label >SSS Contribution:</label>
                <input name="ssscont" type="text" class="form-control input-sm" id="ssscont" onkeyup="sss()"r readonly="readonly">
            </div>

            
  
            <div class="col-sm-4">
                <label >Reg OT Pay:</label>
                <input name="regotpay" type="text" class="form-control input-sm" id="regotpay" onkeyup="sum3()">
            </div>

            <div class="col-sm-4">
                <label >Reg Holiday Pay:</label>
                <input name="regholdpay" type="text" class="form-control input-sm" id="regholdpay" onkeyup="sum5()">
            </div>

            

            <div class="col-sm-4">
                <label>Reg Holiday OT Pay:</label>
                <input name="regholdotpay" type="text" class="form-control input-sm" id="regholdotpay" onkeyup="sum8()">
            </div>
            


            <div class="col-sm-4">
                <label  >Restday Pay:</label>
                <input name="restpay" type="text" class="form-control input-sm" id="restpay" onkeyup="sum6()">
            </div>

            


            <div class="col-sm-4">
                <label >Special Holiday Pay:</label>
                <input name="specholdpay" type="text" class="form-control input-sm" id="specholdpay" onkeyup="sum7(); wtax()">
            </div>
            

            <div class="col-sm-4">
                <label  >Withholding Tax:</label>
                <input name="wtax" type="text" class="form-control input-sm" id"tax">
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <label>Gross Pay:</label>
                <input name="gross" type="text" class="form-control input-sm" id="gross" readonly="readonly">
            </div>

            <div class="col-sm-4">
                <label>Net Pay:</label>
                <input name="income" type="text" class="form-control input-sm" id="net" readonly="readonly">
            </div>
            </div>
         <!--  <input type="button" name="Sumbit" value="Click here" onclick="addNumbers()"/> -->
         <div class="pull-right" style="padding-top:20px;">
            <button type="button" class="btn btn-primary btn-block pull-right" style="width:35%;" onclick="addNumbers();addNumbers2()">Compute &nbsp; <i class="fa fa-plus"></i></button>
            <input type="submit" class="btn btn-primary " value="Save">
            </div>
      
   <!-- <button type="back" class="btn btn-primary">Back</button> -->
   @endif
{{Form::close()}}


<form class="form-horizontal" role="form">
@if($rate->count())
@foreach($rate as $rates)

<input type="text" value="{{$rates->otpayrate}}" id="ot1" />
<input type="text" value="{{$rates->otrestnspecholdrate}}" id="ot2" />
<input type="text" value="{{$rates->otrestspecholdrate}}" id="ot3"/>
<input type="text" value="{{$rates->otregholdrate}}" id="ot4" />
<input type="text" value="{{$rates->otrestonreghold}}"id="ot5"/>
@endforeach
@endif
</form>

</div>
</div>
</div>
</div>