<table class="table table-striped">
	<thead>
		<tr>
			<th>Project Name</th>
			<th style="text-align:center;">Unpaid</th>
		</tr>
	</thead>
	<tbody>
	@foreach($projpo as $proj)
		<tr>
			<td>{{$proj->project_name}}</td>
			<?php
			$all = 0;
			?>
			@foreach($proj->pos as $pos)

				<?php
				$notpaid = 0;
				?>
				@foreach($pos->item as $items)
				<?php
	            $totala =  $items->qty * $items->price;

	            $sum = $notpaid+$totala;
	            $notpaid = $sum;
	            ?>
	            @endforeach
				<?php
				$a = $notpaid+$all;
				$all = $a;		
				?>
			@endforeach			

			
			@if(empty($all))
	<td style="text-align:right;">-</td>
			@else
	<td style="text-align:right;">{{number_format($all,2)}}</td>
	@endif
	</tr>
	@endforeach
	</tbody>
</table>