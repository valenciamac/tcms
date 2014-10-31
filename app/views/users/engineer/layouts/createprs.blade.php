<div class="row">
@foreach($modelhouse as $delmo)
Model Name:{{ucwords($mod->modelName)}}



            <h5>Masonry and Concrete Works</h5>
         
<div class="panel-group" id="accordion">
 <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#mason">
          Mason Items
        </a>
    <div id="mason" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

            @if($masonry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary = 0;
            ?>
            @foreach($masonry as $mason)
            
            <tr>
            {{Form::open(array('route' => 'prsitem.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../mason/{{$mod->id}}/{{$mason->id}}" role="form" method="get">

            <input type="hidden" value="{{$mason->id}}" name="masonryid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $mason->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($mason->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$mason->pending}}" id="ans{{$mason->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num1{{$mason->id}}"value="{{$mason->pending}}"
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $mason->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($mason->unitprice) }}"></td>
           
            <?php
            $total =  $mason->nopieces * $mason->unitprice;

            $sum = $summary+$total;
            $summary = $sum;
            ?>
          <td class="peso">{{number_format($total,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solve{{$mason->id}}()"onclick="solve{{$mason->id}}()" id="num2{{$mason->id}}"class="full-width addinvoice" min="0" max="{{$mason->pending}}"></td>
              <script type="text/javascript">
                 function solve{{$mason->id}}() {
                  var uno = document.getElementById('num1{{$mason->id}}').value;
                  var dos = document.getElementById('num2{{$mason->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$mason->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($masonry->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
       <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
       
          </div>
          </div>
      <hr>
      </div>
      </div>

      </form>
      {{Form::close()}}

        

                   <h5>Form Works</h5>
         

<div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#formworks">
         Formworks Items
        </a>
    <div id="formworks" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
            @if($formworks->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary1 = 0;
            ?>
            @foreach($formworks as $form)
            
            <tr>
            {{Form::open(array('route' => 'prsitem1.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../formworks/{{$mod->id}}/{{$form->id}}" role="form" method="get">
            <input type="hidden" value="{{$form->id}}" name="formid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $form->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($form->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$form->pending}}" id="ansa{{$form->id}}" class="noborder">
                <input type="hidden" class="noborder" id="numa{{$form->id}}"value="{{$form->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $form->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($form->unitprice) }}"></td>
           
            <?php
            $total1 =  $form->nopieces * $form->unitprice;

            $sum1 = $summary1+$total1;
            $summary1 = $sum1;
            ?>
          <td class="peso">{{number_format($total1,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solve{{$form->id}}()"onclick="solve{{$form->id}}()" id="numb{{$form->id}}"class="full-width addinvoice" min="0" max="{{$form->pending}}"></td>
              <script type="text/javascript">
                 function solve{{$form->id}}() {
                  var uno = document.getElementById('numa{{$form->id}}').value;
                  var dos = document.getElementById('numb{{$form->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ansa{{$form->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($formworks->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary1,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   



 


        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
       <hr>
      </div>
      </div>
      </div>
          </div></form>
        {{Form::close()}}
            <h5>Steel Reinforcement</h5>
         
         
<div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#steel">
          Steel Items
        </a>
    <div id="steel" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

            @if($steel->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary2 = 0;
            ?>
            @foreach($steel as $bakal)
            
            <tr>
 {{Form::open(array('route' => 'prsitem2.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../steel/{{$mod->id}}/{{$bakal->id}}" role="form" method="get">
            <input type="hidden" value="{{$bakal->id}}" name="bakalid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $bakal->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($bakal->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$bakal->pending}}" id="sagot{{$bakal->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num3{{$bakal->id}}"value="{{$bakal->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $bakal->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($bakal->unitprice) }}"></td>
           
            <?php
            $total2 =  $bakal->nopieces * $bakal->unitprice;

            $sum2 = $summary2+$total2;
            $summary2 = $sum2;
            ?>
          <td class="peso">{{number_format($total2,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent{{$bakal->id}}()"onclick="solvent{{$bakal->id}}()" id="num4{{$bakal->id}}"class="full-width addinvoice" min="0" max="{{$bakal->pending}}"></td>
              <script type="text/javascript">
                 function solvent{{$bakal->id}}() {
                  var uno = document.getElementById('num3{{$bakal->id}}').value;
                  var dos = document.getElementById('num4{{$bakal->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot{{$bakal->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($steel->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary2,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   



 


        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
        <hr>
      </div>
      </div>
      </div>
          </div></form>
          {{Form::close()}}



            <h5>Carpentry Works</h5>
         
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#carpentry">
          Carpentry Items
        </a>
    <div id="carpentry" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

            @if($carpentry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary3 = 0;
            ?>
            @foreach($carpentry as $carp)
            
            <tr>
             {{Form::open(array('route' => 'prsitem3.store','class'=>'form-horizontal','role'=>'form'))}}

            <form action="../../carpentry/{{$mod->id}}/{{$carp->id}}" role="form" method="get">
            <input type="hidden" value="{{$carp->id}}" name="carpid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $carp->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($carp->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$carp->pending}}" id="sagot1{{$carp->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num5{{$carp->id}}"value="{{$carp->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $carp->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($carp->unitprice) }}"></td>
           
            <?php
            $total3 =  $carp->nopieces * $carp->unitprice;

            $sum3 = $summary3+$total3;
            $summary3 = $sum3;
            ?>
          <td class="peso">{{number_format($total3,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent1{{$carp->id}}()"onclick="solvent1{{$carp->id}}()" id="num6{{$carp->id}}"class="full-width addinvoice" min="0" max="{{$carp->pending}}"></td>
              <script type="text/javascript">
                 function solvent1{{$carp->id}}() {
                  var uno = document.getElementById('num5{{$carp->id}}').value;
                  var dos = document.getElementById('num6{{$carp->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot1{{$carp->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($carpentry->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary3,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   



 


        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
       <hr>
      </div>
      </div>
      </div>
          </div></form>
          {{Form::close()}}


          <h5>Tinsmithry Works</h5>
      <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#thinmistry">
          Tinsmithry Item
        </a>
    <div id="thinmistry" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>    


            @if($thinmistry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary4 = 0;
            ?>
            @foreach($thinmistry as $tin)
            
            <tr>
             {{Form::open(array('route' => 'prsitem4.store','class'=>'form-horizontal','role'=>'form'))}}

            <form action="../../thinmistry/{{$mod->id}}/{{$tin->id}}" role="form" method="get">
            <input type="hidden" value="{{$tin->id}}" name="tinid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $tin->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($tin->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$tin->pending}}" id="sagot2{{$tin->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num7{{$tin->id}}"value="{{$tin->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $tin->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($tin->unitprice) }}"></td>
           
            <?php
            $total4 =  $tin->nopieces * $tin->unitprice;

            $sum4 = $summary4+$total4;
            $summary4 = $sum4;
            ?>
          <td class="peso">{{number_format($total4,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent2{{$tin->id}}()"onclick="solvent2{{$tin->id}}()" id="num8{{$tin->id}}"class="full-width addinvoice" min="0" max="{{$tin->pending}}"></td>
              <script type="text/javascript">
                 function solvent2{{$tin->id}}() {
                  var uno = document.getElementById('num7{{$tin->id}}').value;
                  var dos = document.getElementById('num8{{$tin->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot2{{$tin->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($thinmistry->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary4,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   



 


        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
        <hr>
      </div>
      </div>
      </div>
          </div></form>

          {{Form::close()}}
 <h5>Steel Truss Works</h5>
         
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#truss">
          Steel Truss Items
        </a>
    <div id="truss" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

            @if($truss->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary5 = 0;
            ?>
            @foreach($truss as $rus)
            
            <tr>
               {{Form::open(array('route' => 'prsitem5.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../truss/{{$mod->id}}/{{$rus->id}}" role="form" method="get">
            <input type="hidden" value="{{$rus->id}}" name="rusid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $rus->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($rus->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$rus->pending}}" id="sagot3{{$rus->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num9{{$rus->id}}"value="{{$rus->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $rus->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($rus->unitprice) }}"></td>
           
            <?php
            $total5 =  $rus->nopieces * $rus->unitprice;

            $sum5 = $summary5+$total5;
            $summary5 = $sum5;
            ?>
          <td class="peso">{{number_format($total5,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent3{{$rus->id}}()"onclick="solvent3{{$rus->id}}()" id="num10{{$rus->id}}"class="full-width addinvoice" min="0" max="{{$rus->pending}}"></td>
              <script type="text/javascript">
                 function solvent3{{$rus->id}}() {
                  var uno = document.getElementById('num9{{$rus->id}}').value;
                  var dos = document.getElementById('num10{{$rus->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot3{{$rus->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($truss->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary5,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   



 


        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
       <hr>
      </div>
      </div>
      </div>
          </div></form>
          {{Form::close()}}

           <h5>Hardware Works</h5>
       <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#hardware">
         Hardware Items
        </a>
    <div id="hardware" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>   


            @if($hardware->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary6 = 0;
            ?>
            @foreach($hardware as $hard)
            
            <tr>
               {{Form::open(array('route' => 'prsitem6.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../hardware/{{$mod->id}}/{{$hard->id}}" role="form" method="get">
            <input type="hidden" value="{{$hard->id}}" name="hardid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $hard->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($hard->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$hard->pending}}" id="sagot4{{$hard->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num11{{$hard->id}}"value="{{$hard->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $hard->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($hard->unitprice) }}"></td>
           
            <?php
            $total6 =  $hard->nopieces * $hard->unitprice;

            $sum6 = $summary6+$total6;
            $summary6 = $sum6;
            ?>
          <td class="peso">{{number_format($total6,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent4{{$hard->id}}()"onclick="solvent4{{$hard->id}}()" id="num12{{$hard->id}}"class="full-width addinvoice" min="0" max="{{$hard->pending}}"></td>
              <script type="text/javascript">
                 function solvent4{{$hard->id}}() {
                  var uno = document.getElementById('num11{{$hard->id}}').value;
                  var dos = document.getElementById('num12{{$hard->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot4{{$hard->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($hardware->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary6,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   
        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
         <hr>
      </div>
      </div>
      </div>
          </div></form>
          {{Form::close()}}

 <h5>Tile Works</h5>
          <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#tile">
         Tile Works Items
        </a>
    <div id="tile" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
      


            @if($tile->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary7 = 0;
            ?>
            @foreach($tile as $elit)
            
            <tr>
 {{Form::open(array('route' => 'prsitem7.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../tile/{{$mod->id}}/{{$elit->id}}" role="form" method="get">
            <input type="hidden" value="{{$elit->id}}" name="elitid[]">
            <input type="hidden" name = "prs[]"value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $elit->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($elit->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$elit->pending}}" id="sagot5{{$elit->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num13{{$elit->id}}"value="{{$elit->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $elit->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($elit->unitprice) }}"></td>
           
            <?php
            $total7 =  $elit->nopieces * $elit->unitprice;

            $sum7 = $summary7+$total7;
            $summary7 = $sum7;
            ?>
          <td class="peso">{{number_format($total7,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent5{{$elit->id}}()"onclick="solvent5{{$elit->id}}()" id="num14{{$elit->id}}"class="full-width addinvoice" min="0" max="{{$elit->pending}}"></td>
              <script type="text/javascript">
                 function solvent5{{$elit->id}}() {
                  var uno = document.getElementById('num13{{$elit->id}}').value;
                  var dos = document.getElementById('num14{{$elit->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot5{{$elit->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($tile->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary7,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   

        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
       <hr>
      </div>
      </div>
      </div>
          </div></form>
{{Form::close()}}


           <h5>Door Works</h5>
          <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#door">
          Door and Windows Items
        </a>
    <div id="door" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>


            @if($door->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary8 = 0;
            ?>
            @foreach($door as $pinto)
            
            <tr>
               {{Form::open(array('route' => 'prsitem8.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../door/{{$mod->id}}/{{$pinto->id}}" role="form" method="get">
            <input type="hidden" value="{{$pinto->id}}" name="pintoid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $pinto->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($pinto->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$pinto->pending}}" id="sagot6{{$pinto->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num15{{$pinto->id}}"value="{{$pinto->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $pinto->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($pinto->unitprice) }}"></td>
           
            <?php
            $total8 =  $pinto->nopieces * $pinto->unitprice;

            $sum8 = $summary8+$total8;
            $summary8 = $sum8;
            ?>
          <td class="peso">{{number_format($total8,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent6{{$pinto->id}}()"onclick="solvent6{{$pinto->id}}()" id="num16{{$pinto->id}}"class="full-width addinvoice" min="0" max="{{$pinto->pending}}"></td>
              <script type="text/javascript">
                 function solvent6{{$pinto->id}}() {
                  var uno = document.getElementById('num15{{$pinto->id}}').value;
                  var dos = document.getElementById('num16{{$pinto->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot6{{$pinto->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($door->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary8,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
    

        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
        <hr>
      </div>
      </div>
      </div>
          </div></form>
{{Form::close()}}


           <h5>Electrical Works</h5>
         
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#electrical">
          Add Electrical Details
        </a>
    <div id="electrical" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

            @if($electrical->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary9 = 0;
            ?>
            @foreach($electrical as $elect)
            
            <tr>
               {{Form::open(array('route' => 'prsitem9.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../electrical/{{$mod->id}}/{{$elect->id}}" role="form" method="get">
            <input type="hidden" value="{{$elect->id}}" name="electid[]">
            <input type="hidden" name = "prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $elect->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($elect->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$elect->pending}}" id="sagot7{{$elect->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num17{{$elect->id}}"value="{{$elect->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $elect->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($elect->unitprice) }}"></td>
           
            <?php
            $total9 =  $elect->nopieces * $elect->unitprice;

            $sum9 = $summary9+$total9;
            $summary9 = $sum9;
            ?>
          <td class="peso">{{number_format($total9,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent7{{$elect->id}}()"onclick="solvent7{{$elect->id}}()" id="num18{{$elect->id}}"class="full-width addinvoice" min="0" max="{{$elect->pending}}"></td>
              <script type="text/javascript">
                 function solvent7{{$elect->id}}() {
                  var uno = document.getElementById('num17{{$elect->id}}').value;
                  var dos = document.getElementById('num18{{$elect->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot7{{$elect->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($electrical->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary9,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
    

        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
       <hr>
      </div>
      </div>
      </div>
          </div></form>
{{Form::close()}}


           <h5>Plumbing Works</h5>
          <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#plumbing">
         Plumbing Items
        </a>
    <div id="plumbing" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>


            @if($plumbing->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary10 = 0;
            ?>
            @foreach($plumbing as $plum)
            
            <tr>
               {{Form::open(array('route' => 'prsitem10.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../plumbing/{{$mod->id}}/{{$plum->id}}" role="form" method="get">
            <input type="hidden" value="{{$plum->id}}" name="plumid[]">
            <input type="hidden" name="prs[]" value="{{$delmo->id}}">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $plum->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($plum->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$plum->pending}}" id="sagot8{{$plum->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num19{{$plum->id}}"value="{{$plum->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $plum->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($plum->unitprice) }}"></td>
           
            <?php
            $total10 =  $plum->nopieces * $plum->unitprice;

            $sum10 = $summary10+$total10;
            $summary10 = $sum10;
            ?>
          <td class="peso">{{number_format($total10,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent8{{$plum->id}}()"onclick="solvent8{{$plum->id}}()" id="num20{{$plum->id}}"class="full-width addinvoice" min="0" max="{{$plum->pending}}"></td>
              <script type="text/javascript">
                 function solvent8{{$plum->id}}() {
                  var uno = document.getElementById('num19{{$plum->id}}').value;
                  var dos = document.getElementById('num20{{$plum->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot8{{$plum->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($plumbing->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary10,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif 
            
        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
       <hr>
      </div>
      </div>
      </div>
          </div></form>
{{Form::close()}}


           <h5>Painting Works</h5>
         
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#paint">
          Paint Items
        </a>
    <div id="paint" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

            @if($paint->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Number Remaining Order</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            <th>Order</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary11 = 0;
            ?>
            @foreach($paint as $pintura)
            
            <tr>
               {{Form::open(array('route' => 'prsitem11.store','class'=>'form-horizontal','role'=>'form'))}}
            <form action="../../paint/{{$mod->id}}/{{$pintura->id}}" role="form" method="get">
            <input type="hidden" value="{{$pintura->id}}" name="pinturaid[]">
            <input type="hidden" value="{{$delmo->id}}" name="prs[]">
            <td><input type="text" class="noborder" name="itemdesc[]" value="{{ $pintura->itemdesc }}"></td>
            <td><input type="text" class="noborder" name="nopieces[]"value="{{ number_format($pintura->nopieces)}}">
            </td>
            <td><input type="text" name="pending[]" value="{{$pintura->pending}}" id="sagot9{{$pintura->id}}" class="noborder">
                <input type="hidden" class="noborder" id="num21{{$pintura->id}}"value="{{$pintura->pending}}">
            </td>
            <td><input type="text" name="unitmeasure[]" class="noborder" value="{{ $pintura->unitmeasure }}"></td>
            <td class = "peso"><input type ="text" name="unitprice[]"  class="noborder" value="{{ number_format($pintura->unitprice) }}"></td>
           
            <?php
            $total11 =  $pintura->nopieces * $pintura->unitprice;

            $sum11 = $summary11+$total11;
            $summary11 = $sum11;
            ?>
          <td class="peso">{{number_format($total11,2)}}</td>
           <td><input type="number" name="limit[]"  onkeyup="solvent9{{$pintura->id}}()"onclick="solvent9{{$pintura->id}}()" id="num22{{$pintura->id}}"class="full-width addinvoice" min="0" max="{{$pintura->pending}}"></td>
              <script type="text/javascript">
                 function solvent9{{$pintura->id}}() {
                  var uno = document.getElementById('num21{{$pintura->id}}').value;
                  var dos = document.getElementById('num22{{$pintura->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('sagot9{{$pintura->id}}').value = ans;         
                     }
                  }
                  </script>
            </tr>
            @endforeach
            @if ($paint->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary11,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif 

        <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add to Prs">
        <hr>
      </div>
      </div>
      </div>
          </div></form>
{{Form::close()}}


                 @endforeach
</div>
