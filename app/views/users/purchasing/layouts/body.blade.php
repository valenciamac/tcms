<table class="table table-striped">
	<thead>
		<tr>
			<th>Project Name</th>
			<th>PO</th>
			<th style="text-align:center;">Unpaid</th>
			<th style="text-align:center;">Paid</th>
			<th style="text-align:center;">Total</th>
		</tr>
	</thead>
	<tbody>
	@foreach($projpo as $proj)
		<tr>
			<td>{{$proj->project_name}}</td>
			<?php
			$all = 0;
			$allb = 0;
			$allc = 0;
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
			@foreach($proj->pos as $pou)	
				@if(empty($pou->paid))
				<?php
				$unpaidb = 0;
				?>
					@foreach($pou->item as $items)
					<?php
		            $totalb =  $items->qty * $items->price;

		            $sum2 = $unpaidb+$totalb;
		            $unpaidb = $sum2;
		            ?>
		            @endforeach
				
				<?php
				$b = $unpaidb+$allb;
				$allb = $b;		
				?>
				@else
				<?php
				$unpaidc = 0;
				?>
					@foreach($pou->item as $items)
					<?php
		            $totalc =  $items->qty * $items->price;

		            $sum2 = $unpaidc+$totalc;
		            $unpaidc = $sum2;
		            ?>
		            @endforeach
				
				<?php
				$c = $unpaidc+$allc;
				$allc = $c;		
				?>
				@endif
			@endforeach
				
			
	<td>{{$proj->pos->count()}}</td>
			@if(empty($allb))
	<td style="text-align:right;">-</td>
			@else
	<td style="text-align:right;">{{number_format($allb,2)}}</td>
	@endif
			@if(empty($allc))
	<td style="text-align:right;">-</td>
			@else
	<td style="text-align:right;">{{number_format($allc,2)}}</td>
	@endif
			@if(empty($all))
	<td style="text-align:right;">-</td>
			@else
	<td style="text-align:right;">{{number_format($all,2)}}</td>
	@endif
	</tr>
	@endforeach
	</tbody>
</table>