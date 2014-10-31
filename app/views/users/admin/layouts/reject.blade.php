
<h5>Inventory Items In {{ucwords($pro->project_name)}}</h5>

<table class="table table-bordered" style="font-size:13px;">
 <thead>
            <tr>
            <th>Id</th>
            <th>Item Name</th>
            <th>Item Description</th>
            <th>Quantity</th>
            <th>Number Of Rejects</th>
            </tr>
            </thead>

<tbody>
@foreach($invitem as $inv)
<form action="{{$inv->project->id}}/{{$inv->id}}" role="form" method="get">
			<tr>
			<td>{{$inv->id}}</td>
			<td>{{$inv->invName}}</td>
			<td>{{$inv->idesc}}</td>
			<td><input type="text" class="noborder" id="ans{{$inv->id}}" value="{{$inv->qty}}"></td>
			<td>
				<input type="hidden" name="invid[]" value="{{$inv->id}}" readonly>
				<input type="hidden" name="invname[]" value="{{$inv->invName}}" readonly>
				<input type="hidden" name="idesc[]" value="{{$inv->idesc}}" readonly>
				<input type="hidden" readonly id="num1{{$inv->id}}" value="{{$inv->qty}}">
				<input type="number" name="rejects[]" onkeyup="compute{{$inv->id}}()" onclick="compute{{$inv->id}}()" id="num2{{$inv->id}}" class="full-width addinvoice" min="0" max="{{$inv->qty}}">
				</td>

			<script type="text/javascript">

			function compute{{$inv->id}}(){
			var uno = document.getElementById('num1{{$inv->id}}').value;
			var dos = document.getElementById('num2{{$inv->id}}').value;
			var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$inv->id}}').value = ans;         
                     }
                  }

			</script>
</tr>

@endforeach

</tbody>
</table>
<button type="submit" class="btn btn-primary addinvoice pull-right">Update</button>
</form>