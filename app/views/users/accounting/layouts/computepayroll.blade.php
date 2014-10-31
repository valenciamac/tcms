  @if (Session::has('flash_message'))
      <div class="alert alert-danger" role="alert">
        <p>{{ Session::get('flash_message') }}</p>
      </div>
    @endif
   {{Form::open(array('route' => 'payroll.store','class'=>'form-horizontal','role'=>'form'))}}
   <!-- content here -->
   @if ($employee->count())
   @foreach ($employee as $pay)
    Employee ID :: {{$pay->id}}<br>
    First Name: {{ucwords($pay->fname)}}<br>
    Last Name: {{ucwords($pay->lname)}}<br>
    Rate :: {{$pay->rate}}<br>
    Basic Income :: {{$pay->basic }}<br>

        <div class="col-sm-4">
                <input name="empId" type="hidden" class="form-control input-sm" id="empId" value="{{$pay->id}}">
             </div>
         <div class="col-sm-4">
                <input name="basic" type="hidden" class="form-control input-sm" id="basic" value="{{$pay->basic}}">
             </div>
              <div class="col-sm-4">
                <input name="rate" type="hidden" class="form-control input-sm" id="rate" value="{{$pay->rate}}">
             </div>
         <div class="col-sm-4">
            <input name="days" type="hidden"  onkeyload="calDate()" class="form-control input-sm" id="days" value="{{$pay->days}}">
         </div>
        
      

   &nbsp;
   <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#ppp">
          Add Payroll Details
        </a>
    <div id="ppp" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

<div class="row">
  
      
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
         
      
        
             <div class="col-sm-4">
                <label  >Paydate:</label>
                <input id="paydate"  value="{{$pay->paydate}}" readonly="" onkeyload="calDate()" type="text" class="form-control input-sm datepicker maxwidth" value="<?php echo date("Y-m-d") ?>" name="paydate" required>
            </div>
            <div class="col-sm-4">
                <label  >Paydate End:</label>
             <input name="paydateend"  readonly=""type="text" class="form-control input-sm maxwidth" id="paydateend" value="<?php echo date("Y-m-d") ?>" >
              </div>
               @endforeach
             </div>
             <div class="row">
            <div class="col-sm-4">
                <label  >Late/Under Time Hours:</label>
                <input name="lateunder" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm maxwidth"  id="lateunder" onkeyup="sum9()">
            </div>
          <div class="col-sm-4">
                <label >Absences:</label>
                <input name="absent" type="number" min="0" max="15" class="form-control input-sm" id="absent" onkeyup="sum4()">
            </div>
            </div>

            <div class="row">
           
           <div class="col-sm-4">
                <label >SSS Contribution:</label>
                <input name="ssscont" type="text" class="form-control input-sm" id="ssscont" onkeyload="sss()"readonly="readonly">
            </div>
            
            <div class="col-sm-4">
                <label>Philhealth Contribution:</label>
                <input name="phcont" type="text" class="form-control input-sm" id="phcont" onkeyload="philhealth()" readonly="readonly" >
            </div>

            <div class="col-sm-4">
                <label >Pag-ibig Contribution:</label>
                <input name="pgibigcont" type="text" class="form-control input-sm" id="pgibigcont" onkeyload="pagibig()" readonly="readonly">
            </div>

              <div class="col-sm-4">
                <label >Cash Advance:</label>
                <input name="advance" type="number" min="0" max="{{$pay->basic}}" class="form-control input-sm" id="advance" onkeyup="cashadv()">
            </div>

            
  
            <div class="col-sm-4">
                <label >Reg OT Pay:</label>
                <input name="regotpay" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm" id="regotpay" onkeyup="sum3()">
            </div>

            <div class="col-sm-4">
                <label >Reg Holiday Pay:</label>
                <input name="regholdpay" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm" id="regholdpay" onkeyup="sum5()">
            </div>

            

            <div class="col-sm-4">
                <label>Reg Holiday OT Pay:</label>
                <input name="regholdotpay" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm" id="regholdotpay" onkeyup="sum8()">
            </div>
            


            <div class="col-sm-4">
                <label  >Restday Pay:</label>
                <input name="restpay" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm" id="restpay" onkeyup="sum6()">
            </div>

            


            <div class="col-sm-4">
                <label >Special Holiday Pay:</label>
                <input name="specholdpay" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm" id="specholdpay" onkeyup="sum7(); wtax()">
            </div>
            

            <div class="col-sm-4">
                <label  >Restday on Special Holliday:</label>
                <input name="restspecial" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm" id="restspecial" onkeyup="sum10();">
            </div>
            <div class="col-sm-4">
                <label  >Restday on Regular Holliday:</label>
                <input name="restreg" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" type="text" class="form-control input-sm" id="restreg" onkeyup="sum11();">
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
            </div><br><br>
            
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

<input type="hidden" value="{{$rates->otpayrate}}" id="otpayrate" />
<input type="hidden" value="{{$rates->otrestnspecholdrate}}" id="ot2" />
<input type="hidden" value="{{$rates->otrestspecholdrate}}" id="ot3"/>
<input type="hidden" value="{{$rates->otregholdrate}}" id="otregholdrate" />
<input type="hidden" value="{{$rates->otrestonreghold}}"id="ot5"/>
@endforeach
@endif
</form>
<form class="form-horizontal" role="form">
@if($pagibig->count())

@foreach($pagibig as $pegebeg)

<input type="hidden" value="{{$pegebeg->pagibigmin}}" id="peg2{{$pegebeg->id}}" />
<input type="hidden" value="{{$pegebeg->pagibigmax}}" id="peg3{{$pegebeg->id}}"/>
<input type="hidden" value="{{$pegebeg->employeeshare}}" id="peg{{$pegebeg->id}}"/>
<script>

function pagibig() {
    var trestres = document.getElementById('basic').value;
     var tres = parseFloat(trestres)
     var apatapat = document.getElementById('peg{{$pegebeg->id}}').value;
    var apat=parseFloat(apatapat)
    var limalima = document.getElementById('peg2{{$pegebeg->id}}').value;
    var lima = parseFloat(limalima)
    var animanim = document.getElementById('peg3{{$pegebeg->id}}').value;
    var anim = parseFloat(animanim)
     if(tres>=lima && tres<=anim)
     {
        ans=parseFloat(trestres)*parseFloat(apatapat)
        document.getElementById('pgibigcont').value = ans;
     }
      if(tres>=lima && tres<=anim)
     {
        ans=parseFloat(trestres)*parseFloat(apatapat)
        document.getElementById('pgibigcont').value = ans;
     }
    }
      window.onload=pagibig();

</script>
@endforeach
@endif
</form>
<form class="form-horizontal" role="form">
@if($phcontr->count())

@foreach($phcontr as $phili)

<input type="hidden" value="{{$phili->salmin}}" id="phil{{$phili->salmin}}" />
<input type="hidden" value="{{$phili->salmax}}" id="phil2{{$phili->salmax}}"/>
<input type="hidden" value="{{$phili->empeeshare}}" id="phil3{{$phili->empeeshare}}"/>
<script>

function philhealth() {
    var pitopito = document.getElementById('basic').value;
    var pito = parseFloat(pitopito);
    var walowalo = document.getElementById('phil{{$phili->salmin}}').value;
    var walo=parseFloat(walowalo);
    var siyamsiyam = document.getElementById('phil2{{$phili->salmax}}').value;
    var siyam = parseFloat(siyamsiyam);
    var sampusampu = document.getElementById('phil3{{$phili->empeeshare}}').value;
    var sampu = parseFloat(sampusampu);
   if(pito >= walo && pito <= siyam)
        {
            ans=parseFloat(sampusampu);
            document.getElementById('phcont').value = ans;
        }
         
    }
      window.onload=philhealth();

</script>
@endforeach
@endif
</form>
<form class="form-horizontal" role="form">
@if($ssscontr->count())

@foreach($ssscontr as $contri)

<input type="hidden" value="{{$contri->rangemin}}" id="cont{{$contri->rangemin}}" />
<input type="hidden" value="{{$contri->rangemax}}" id="cont2{{$contri->rangemax}}"/>
<input type="hidden" value="{{$contri->ssempeeshare}}" id="cont3{{$contri->ssempeeshare}}"/>
<script>

function sss() 
{
    var unauna = document.getElementById('basic').value;
    var una = parseFloat(unauna)
    var dalawadalawa = document.getElementById('cont{{$contri->rangemin}}').value;
    var dalawa=parseFloat(dalawadalawa)
    var tatlotatlo = document.getElementById('cont2{{$contri->rangemax}}').value;
    var tatlo = parseFloat(tatlotatlo)
    var kwatrokwatro = document.getElementById('cont3{{$contri->ssempeeshare}}').value;
    var kwatro = parseFloat(kwatrokwatro)
      if(una >= dalawa && una <= tatlo)
        {
            ans=parseFloat(kwatrokwatro);
            document.getElementById('ssscont').value=ans;
        }  
         

   }
     window.onload=sss();

</script>
@endforeach
@endif
</form>
</div>
</div>
</div>

