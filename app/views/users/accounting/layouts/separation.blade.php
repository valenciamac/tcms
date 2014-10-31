<h3>Separation Pay</h3>
{{Form::open(array('route' => 'separation.store','class'=>'form-horizontal','role'=>'form'))}}
@if($employee->count())
@foreach($employee as $sep)
 Employee ID :: {{$sep->id}}<br>
 First Name: {{ucwords($sep->fname)}}<br>
 Middle Name: {{ucwords($sep->mname)}}<br>
 Last Name: {{ucwords($sep->lname)}}<br>
 Basic: {{($sep->basic)}}<br>
 @endforeach
 @endif
<div class="col-sm-4">
                <input name="employee_id" type="hidden" class="form-control input-sm" id="empId" value="{{$sep->id}}">
             </div>
             <div class="col-sm-4">
                <input name="basic" type="hidden" onkeyload="separation()" class="form-control input-sm" id="basic" value="{{$sep->basic}}">
             </div>
<div class="col-sm-4">
                <input name="firstN" type="hidden" class="form-control input-sm"  value="{{$sep->fname}}">
             </div>
             <div class="col-sm-4">
                <input name="middleN" type="hidden" class="form-control input-sm"  value="{{$sep->mname}}">
             </div>

             <div class="col-sm-4">
                <input name="lastN" type="hidden" class="form-control input-sm"  value="{{$sep->lname}}">
             </div>
<br>
			<div class="form-group">
                <?php
                $total=0;
                ?>
                @if($day->count())
                @foreach($day as $araw)
                <?php
                $summary = $araw->days;
                $add=$total+$summary;
                $total=$add;
                ?>
                @endforeach
                @endif

                <label for="fname" class="col-sm-2 control-label" >Total number of days Work:</label>
                <div class="col-sm-6">
                <input name="days_work"placeholder="" id="add" readonly="" onkeyload="separation()" value="{{$add}}" required type="text" class="form-control">

                
            </div>
            </div>
             <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >Reason:&nbsp;</label>
                <div class="col-sm-6">
                <input name="reason"placeholder="" required type="text" class="form-control">
                
                
            </div>
            </div>

                <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >Separation Payday&nbsp;</label>
                <div class="col-sm-6">
            <input  type="text" onkeypress="return numeric3();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,10);" maxlength="10" required class="form-control input-sm datepicker maxwidth" value="{{ date('Y-m-d') }}" name="sepdate" required>
                
            </div>
            </div>
            <div class="form-group">
                <label for="fname" class="col-sm-2 control-label" >Amount of Separation pay:&nbsp;</label>
                <div class="col-sm-6">
                <input name="amtpay"placeholder="" readonly="" id="amt"required type="text" class="form-control">
                
                
            </div>
            </div>
       <div class="form-group">
      <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:35%;">Save &nbsp; <i class="fa fa-save"></i></button>
   </div>
{{Form::close()}}


