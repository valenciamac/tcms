
<div ng-app ng-controller="ItemsController">

      <table class="table table-striped" style="padding-top:10px;" id="dataTable">
         <table class="table table-striped" style="padding-top:10px;" id="dataTable">
      @foreach($po as $ponum)   
         <tbody>
          @foreach($prsitem as $pitem)
          <form action="../../prsposave" role="form" name="itemadd">
           <tr>
               <td><input type="hidden" value="{{$ponum->id}}" name="po_po[]" readonly="readonly"></td>
               <td><input type="hidden" value="{{$ponum->prs}}" name="prs[]" readonly="readonly"></td>
               <td><input type="hidden" name="iname[]" value="{{$pitem->itemdesc}}" readonly="readonly">{{$pitem->itemdesc}}</td>
               <td>
                  <input type="hidden" class="noborder" id="qty{{$pitem->id}}" value="{{$pitem->edit_this}}" readonly>
                  <input type="text" value="{{$pitem->edit_this}}" class="noborder" id="ans{{$pitem->id}}" name="edit_this[]">
                  <td><input type="hidden" name="iunit[]" value="{{$pitem->unitmeasure}}" readonly="readonly">{{$pitem->unitmeasure}}</td>
               </td>
               <td><input type="text" class="noborder" value="{{$pitem->unitprice}}" name="iprice[]" readonly></td>
            
               <td>
               <input type="number" onclick="invoice{{$pitem->id}}()" id="del{{$pitem->id}}" step="1" min="0" max="{{$pitem->edit_this}}"
               onkeyup="invoice{{$pitem->id}}();" onkeypress="return isNumberKey(event)"
                class="full-width addinvoice" name="qty[]" placeholder="0">
               </td>
              
               
       
            <input type="hidden" value="{{$pitem->id}}" name="id[]" readonly>
            <input type="hidden" value="{{$ponum->proj_id}}" name="projid[]" readonly>
            
            <script type="text/javascript">
                 function invoice{{$pitem->id}}() {
                  var uno = document.getElementById('qty{{$pitem->id}}').value;
                  var dos = document.getElementById('del{{$pitem->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$pitem->id}}').value = ans;         
                     }
                  }

                  function isNumberKey(evt){
                      var charCode = (evt.which) ? evt.which : event.keyCode
                      if (charCode > 31 && (charCode < 48 || charCode > 57))
                          return false;
                      return true;
                  }
            </script>
            </tr>
            @endforeach
         </tbody>
         @endforeach
      </table>
   <input type="submit" class="btn btn-primary " value="Add" style="margin-bottom:30px;">
            </form>
   <script type="text/javascript" language="JavaScript">
   document.forms['itemadd'].elements['name'].focus();
   </script>
   </form>
   <script type="text/javascript" language="JavaScript">
   document.forms['itemadd'].elements['name'].focus();
   </script>
</div>

<table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>Item Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
         </tr>
      </thead>
      <tbody>
        <tr class="contents">
        <?php
        $summary = 0;
        ?>
        @foreach($item as $items)
          <td>{{$items->iname}}</td>
          <td>{{$items->desc}}</td>
          <td>{{$items->qty}} {{$items->unit}}</td>
          <td class="peso">{{$items->price}}</td>
          <?php
            $total =  $items->qty * $items->price;

            $sum = $summary+$total;
            $summary = $sum;
            ?>
          <td class="peso">{{$total}}</td>
         </tr>
         @endforeach
         
   @if ($item->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{$summary}}
         </div>
         </div>
         </td>
         </div>
         
      </tbody>
   </table>
      <div class="pull-right" style="margin-bottom:50px;">
      
        <a href="../{{$additem->id}}/{{$summary}}/reports" class="btn btn-primary">Download Report</a>
        <a href="../../purchaseOrder" class="btn btn-primary">Done</a>
      </div>
  @else
   </tbody>
   </table>
   @endif

</div>
</div>
</div>