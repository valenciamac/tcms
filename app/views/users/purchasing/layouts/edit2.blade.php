<div class="col-md-9">
   <!-- content here -->
   @if ($item->count())
   <table class="table table-bordered table-hover" style="font-size:13px;">
      <thead>
         <tr>
            <th>Id</th>
            <th>Po</th>
            <th>Quantity</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Amount</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($item as $product)
         <tr>
            <form action="{{$product->id}}/update">
               <td>{{ $product->id }}</td>
               <td><input name="po" type="text" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder="" required value="{{ ($product->po) }}" class="form-controll"> </td>
               <td><input name="qty" type="text" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required value="{{ ($product->qty) }}" class="form-controll"> </td>
               <td><input name="name" type="text" onkeypress="return validate2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,25);" maxlength="25" placeholder="" required value="{{ ($product->name) }}" class="form-controll"> </td>
               <td><input name="desc" type="text"  onkeypress="return validate2();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,25);" maxlength="25" placeholder=""value="{{ ($product->desc) }}" class="form-controll" required> </td>
               <td><input name="price" type="text" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required value="{{ ($product->price) }}" class="form-controll"> </td>
               <td><input name="amount"  value="{{ ($product->amount) }}" class="form-controll" required> </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <button type="submit" class="btn btn-primary">save</button>
   <button type="back" class="btn btn-primary">Back</button>
   </form>  
   @else
   <h1>No results</h1>
   @endif
</div>
</div>
</div>
</div>