<div class="col-md-9">
   <!-- content here -->
   @if ($rfp->count())
   <table class="table table-bordered table-hover" style="font-size:13px;">
      <thead>
         <tr>
            <th>Id</th>
            <th>Control Number</th>
            <th>Payee</th>
            <th>Requested Date</th>
            <th>Reason</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($rfp as $prf)
         <tr>
            <form action="{{$prf->id}}/update">
               <td>{{ $prf->id }}</td>
               <td><input name="controlNo" type="text" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,5);" maxlength="5" placeholder="" value="{{ ($prf->controlNo) }}" class="form-controll"> </td>
               <td><input name="payee" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,15);" maxlength="15" placeholder="" value="{{ ($prf->payee) }}" class="form-controll"> </td>
               <td><input name="requestedDate" type="text" onkeypress="return numeric3();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,10);" maxlength="10" placeholder=""value="{{ ($prf->requestedDate) }}" class="form-controll"> </td>
               <td><input name="reason" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,25);" maxlength="25" placeholder="" value="{{ ($prf->reason) }}" class="form-controll"> </td>
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