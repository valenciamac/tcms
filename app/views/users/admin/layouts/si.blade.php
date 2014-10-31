<div class="col-md-9">
   
@foreach($po as $ponum)

   <h4>PO Number:&nbsp;{{$ponum->po}}</h4>
      <table class="table table-bordered content" style="font-size:13px;" id="res">
         <thead>
            <tr>
               <th>Items</th>
               <th>Description</th>
               <th>Quantity</th>
               <th>Delivered</th>
               <th>Save</th>
            </tr>
         </thead>
         <tbody>
         @foreach($item as $purchase)
            <tr>
            <form action="{{$ponum->po}}/{{$purchase->id}}" role="form" method="get">
               <td>{{$purchase->iname}}<input type="hidden" name="iname" value="{{$purchase->iname}}" readonly></td>
               <td>{{$purchase->desc}}<input type="hidden" name="idesc" value="{{$purchase->desc}}" readonly></td>
               <td>
                  <input type="hidden" class="noborder" id="qty{{$purchase->id}}" value="{{$purchase->edit_this}}" readonly>
                  <input type="text" value="{{$purchase->edit_this}}" readonly class="noborder" id="ans{{$purchase->id}}">
                  <input type="hidden" readonly name="iprice" value="{{$purchase->price}}" class="noborder" id="ans{{$purchase->id}}">
               </td>
               <td>
               <input type="number" required name="iqty" onclick="invoice{{$purchase->id}}()" id="del{{$purchase->id}}" step="1" min="0" max="{{$purchase->edit_this}}"
               onkeyup="invoice{{$purchase->id}}()" onkeypress="return isNumberKey(event)"
                class="full-width addinvoice" name="delivered" placeholder="0">
                </td>
               <td>
                  
                  <input type="hidden" value="$purchase->id" name="id">

               </td>
               <td>
                  <button type="submit" class="btn btn-primary addinvoice btn-full-width">Update</button>
               </td>
            
            
            <script type="text/javascript">
                 function invoice{{$purchase->id}}() {
                  var uno = document.getElementById('qty{{$purchase->id}}').value;
                  var dos = document.getElementById('del{{$purchase->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$purchase->id}}').value = ans;         
                     }
                  }

                  function isNumberKey(evt){
                      var charCode = (evt.which) ? evt.which : event.keyCode
                      if (charCode > 31 && (charCode < 48 || charCode > 57))
                          return false;
                      return true;
                  }
            </script>
            </form>
            </tr>
         @endforeach
         </tbody>
      </table>
      
    
    @endforeach
</div>
