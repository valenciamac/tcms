
<div ng-app ng-controller="ItemsController">
<form ng-submit="additem()" method="Post" role="form" name="itemadd">
      <table class="table table-striped" style="padding-top:10px;" id="dataTable">
         <tbody>
            <tr>
               <td><input type="hidden" value="{{$additem->po}}" name="po_po" readonly="readonly"></td>
               <td><input type="text" style="max-width:2000px;" class="form-control input-sm" name="name" placeholder="Name" onkeypress="return validate2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,25);" maxlength="25" placeholder="" required></td>
               <td><input type="text" style="max-width:110px;" class="form-control input-sm" name="desc" placeholder="Description" onkeypress="return validate2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,25);" maxlength="25" placeholder="" required></td>
               <td><input type="text" style="max-width:230px;" class="form-control input-sm" name="qty"  id="text1" onkeyup="add2();" placeholder="Quantity" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required></td>
               <td><input type="text" style="max-width:110px;" class="form-control input-sm" name="price" id="text2" placeholder="Price" onkeyup="add2();" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required></td>
               <td><input type="text" style="max-width:110px;" class="form-control input-sm" name="amount" placeholder="Amount" id="text3" required></td>
               <td><input type="hidden" name="po1" id="po1" class="inputext"></td>
            </tr>
         </tbody>
      </table>
      <div class="pull-right">
         <input type="submit" class="btn btn-primary " value="Add" style="margin-bottom:30px;">
      </div>
   </form>
   <script type="text/javascript" language="JavaScript">
   document.forms['itemadd'].elements['name'].focus();
   </script>
</div>

<table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>Supplier Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
         </tr>
      </thead>
      <tbody>
        <tr class="contents">
        @foreach($item as $items)
          <td>{{$items->iname}}</td>
          <td>{{$items->desc}}</td>
          <td>{{$items->qty}}</td>
          <td>{{$items->price}}</td>
          <?php
            $total =  $items->qty * $items->price;

            ?>
          <td>{{$total}}</td>
         </tr>
         @endforeach
      </tbody>
   </table>
   @if ($item->count())
      <div class="pull-right" style="margin-bottom:50px;">
        <a href="{{$additem->po}}/reports" class="btn btn-primary">Download Report</a>
        <a href="../purchaseOrder" class="btn btn-primary">Done</a>
      </div>
   @endif

</div>
</div>
</div>