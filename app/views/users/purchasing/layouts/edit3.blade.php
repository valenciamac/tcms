<div class="col-md-9">
   <!-- content here -->
   @if ($detail->count())
   <table class="table table-bordered table-hover" style="font-size:13px;">
      <thead>
         <tr>
            <th>Id</th>
            <th>Po Number</th>
            <th>Dr Number</th>
            <th>Si Number</th>
            <th>Ci Number</th>
            <th>So Number</th>
            <th>Others</th>
            <th>Description</th>
            <th>Amount</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($detail as $info)
         <tr>
            <form action="{{$info->id}}/update">
               <td>{{ $info->id }}</td>
               <td><input name="po_number" type="text" value="{{ ($info->po_number) }}" class="form-controll"> </td>
               <td><input name="dr_number" type="text" value="{{ ($info->dr_number) }}" class="form-controll"> </td>
               <td><input name="si_number" type="text" value="{{ ($info->si_number) }}" class="form-controll"> </td>
               <td><input name="ci_number" type="text" value="{{ ($info->ci_number) }}" class="form-controll"> </td>
               <td><input name="so_number" type="text" value="{{ ($info->so_number) }}" class="form-controll"> </td>
               <td><input name="others" type="text" value="{{ ($info->others) }}" class="form-controll"> </td>
               <td><input name="description" type="text" value="{{ ($info->descrription) }}" class="form-controll"> </td>
               <td><input name="amount" type="text" value="{{ ($info->po_amount) }}" class="form-controll"> </td>
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