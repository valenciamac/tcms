
<?php
  $totalsum = 0;
?>
<div class="bg-red mrs">Masonry and Concrete Works</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>
            <th>Required</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
          ?>
        @foreach($masonry as $masonryitems)
          <?php
            $total =  $masonryitems->nopieces * $masonryitems->unitprice;
            $sum = $sum+$total;
            ?>
          <!-- <form action="../prsitem/{//{$masonryitems->model_id}}" role="form" method="get"> -->
          {{Form::open(array('route' => 'masonryitem.store','class'=>'form-horizontal','role'=>'form'))}}
            <tr>
              <td><input type="hidden" name="iname" value="{{$masonryitems->itemdesc}}" readonly>{{ucwords($masonryitems->itemdesc)}}</td>
              <td>
                <input type="hidden" class="noborder" id="qty{{$masonryitems->id}}" value="{{$masonryitems->edit_this}}" readonly>
                  <input type="text" value="{{$masonryitems->edit_this}}" class="noborder" id="ans{{$masonryitems->id}}" name="edit_thisa" readonly>
              </td>
              <td>{{$masonryitems->unitmeasure}}</td>
              <td>{{$masonryitems->unitprice}}</td>
                <?php
                $total =  $masonryitems->nopieces * $masonryitems->unitprice;
                $sum = $sum+$total;
                ?>
              <td>{{$total}}</td>
              <td>
                <input type="number" required onclick="invoice1{{$masonryitems->id}}()" id="del{{$masonryitems->id}}" step="1" min="0" max="{{$masonryitems->edit_this}}"
                onkeyup="invoice1{{$masonryitems->nopieces}}()" onkeypress="return isNumberKey(event)"
                class="full-width addinvoiceA" placeholder="0" name="qty">
                <input type="hidden" value="$masonryitems->nopieces" name="nopieces">
              </td>
              <td>
                <input type="hidden" value="{{$masonryitems->id}}" name="id" readonly>
                <input type="hidden" value="{{$masonryitems->model_id}}" name="prs" readonly>
                <input type="hidden" value="{{$masonryitems->unitmeasure}}" name="unit" readonly>
                <input type="hidden" value="{{$masonryitems->unitprice}}" name="price" readonly>
                <button type="submit" class="btn btn-primary addinvoiceA btn-full-width">Update</button>
             </td>
            
            <script type="text/javascript">
                 function invoice1{{$masonryitems->id}}() {
                  var uno = document.getElementById('qty{{$masonryitems->id}}').value;
                  var dos = document.getElementById('del{{$masonryitems->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$masonryitems->id}}').value = ans;         
                     }
                  }

                  function isNumberKey(evt){
                      var charCode = (evt.which) ? evt.which : event.keyCode
                      if (charCode > 31 && (charCode < 48 || charCode > 57))
                          return false;
                      return true;
                  }
            </script>
            <!-- </form> -->
            {{Form::close()}}
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Formworks</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>
            <th>Required</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
          ?>
        @foreach($formworks as $formworksitems)
          <?php
            $total =  $formworksitems->nopieces * $formworksitems->unitprice;
            $sum = $sum+$total;
            ?>
          <!-- <form action="../prsitem/{//{$formworksitems->model_id}}" role="form" method="get"> -->
          {{Form::open(array('route' => 'formworksitem.store','class'=>'form-horizontal','role'=>'form'))}}
            <tr>
              <td><input type="hidden" name="iname" value="{{$formworksitems->itemdesc}}" readonly>{{ucwords($formworksitems->itemdesc)}}</td>
              <td>
                <input type="hidden" class="noborder" id="qty{{$formworksitems->id}}" value="{{$formworksitems->edit_this}}" readonly>
                  <input type="text" value="{{$formworksitems->edit_this}}" class="noborder" id="ans{{$formworksitems->id}}" name="edit_thisb" readonly>
              </td>
              <td>{{$formworksitems->unitmeasure}}</td>
              <td>{{$formworksitems->unitprice}}</td>
                <?php
                $total =  $formworksitems->nopieces * $formworksitems->unitprice;
                $sum = $sum+$total;
                ?>
              <td>{{$total}}</td>
              <td>
                <input type="number" required onclick="invoice2{{$formworksitems->id}}()" id="del{{$formworksitems->id}}" step="1" min="0" max="{{$formworksitems->edit_this}}"
                onkeyup="invoice2{{$formworksitems->nopieces}}()" onkeypress="return isNumberKey(event)"
                class="full-width addinvoiceB" placeholder="0" name="qty">
                <input type="hidden" value="$formworksitems->nopieces" name="nopieces">
              </td>
              <td>
                <input type="hidden" value="{{$formworksitems->id}}" name="id" readonly>
                <input type="hidden" value="{{$formworksitems->model_id}}" name="prs" readonly>
                <input type="hidden" value="{{$formworksitems->unitmeasure}}" name="unit" readonly>
                <input type="hidden" value="{{$formworksitems->unitprice}}" name="price" readonly>
                <button type="submit" class="btn btn-primary addinvoiceB btn-full-width">Update</button>
             </td>
            
            <script type="text/javascript">
                 function invoice2{{$formworksitems->id}}() {
                  var uno = document.getElementById('qty{{$formworksitems->id}}').value;
                  var dos = document.getElementById('del{{$formworksitems->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$formworksitems->id}}').value = ans;         
                     }
                  }

                  function isNumberKey(evt){
                      var charCode = (evt.which) ? evt.which : event.keyCode
                      if (charCode > 31 && (charCode < 48 || charCode > 57))
                          return false;
                      return true;
                  }
            </script>
            <!-- </form> -->
            {{Form::close()}}
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
            
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Steel Reinforcement</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($steel as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Carpentry</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($carpentry as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Tinsmithry Works</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($thinmistry as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Steel Truss</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($truss as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Hardwares</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($hardware as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Tile Works</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($tile as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Doors and Windows</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($door as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Electrical Works</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($electrical as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Plumbing Works</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($plumbing as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>
        <!-- endif() -->
 </tbody>
   </table> 

<div class="bg-red mrs">Painting Works</div>
<table class="table table-striped" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Unit Measure</th>
            <th>Unit Price</th>
            <th>Amount</th>

         </tr>
      </thead>
      <tbody>
        <tr class="contents">
          <?php
            $sum = 0;
            ?>
        @foreach($paint as $items)
          <td>{{ucwords($items->itemdesc)}}</td>
          <td>{{$items->nopieces}}</td>
          <td>{{$items->unitmeasure}}</td>
          <td>{{$items->unitprice}}</td>
          <?php
            $total =  $items->nopieces * $items->unitprice;
            $sum = $sum+$total;
            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach

        <!-- if ($prsitem->count()) -->
          <td colspan="4"><div class="pull-right">Total Price:</div></td>
            <td class="row">
              <div class="pull-left">
                <div class="peso">
                  {{$sum}}
                  <?php $totalsum = $totalsum + $sum; ?>
                </div>
              </div>
            </td>

           
        <!-- endif() -->
 </tbody>

   </table> 

<table class="table table-striped" style="font-size:13px;">
     <td><div align="center"><h5>Total Price: {{$totalsum}}</h5></div></td>
</table>

<div class="pull-right" style="margin-bottom:50px;">
      
        <!-- <a href="#" class="btn btn-primary">Download Report</a> -->
        <a href="../prs" class="btn btn-primary">Done</a>
      </div>


</div>
</div>
</div>