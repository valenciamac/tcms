<table>

@foreach($total as $totals)
	<tr>
		<td>{{ $totals->purchaseJanuary }}</td>
		<td>{{ $totals->purchaseFebruary }}</td>	
		<td>{{ $totals->purchaseMarch }}</td>	
	</tr>
@endforeach

</table>