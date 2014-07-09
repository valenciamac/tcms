
	<style type="text/css">
  	body { font-family: Verdana, Arial, sans-serif; font-size: 12px; }
 	 #placeholder { width: 700px; height: 400px; }
 	</style>
 	<link href="examples.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="jquery.js"></script>
	<script language="javascript" type="text/javascript" src="jquery.flot.js"></script>
	<script type="text/javascript">

	<?php
		$totalIncome = 5.5;
		$totalExpenses = 4.5;
		// $totalIncome = finance::whereincome($income)->first();
		// $incomeExpenses=0;
		// $totalExpenses = finance::whereexpenses($expenses)->first();
		// $incomeExpenses=0;
	?>

	var today = new Date();
  	var yyyy = today.getFullYear();
  	var pIncome = {{$totalIncome}};
  	var pExpenses = {{$totalExpenses}};

	$(function () {

		var income = [[yyyy-4, pIncome],[yyyy-3, 7.6],[yyyy-2, 5.9],[yyyy-1, 7.9], [yyyy, 8.2]
		
		];
		var expenses = [[yyyy-4, pExpenses],[yyyy-3, 5.4],[yyyy-2, 4.4],[yyyy-1, 3.3], [yyyy, 5.5]];

		$.plot("#placeholder", [
			{ label: "Income", data: income },
			{ label: "Expenses", data: expenses }
		], {
			legend: {
				position: "se"
			},
			series: {
				lines: { show: true },
				points: { show: true }
			},
			yaxis: {
				ticks: 10,
				min: 0,
				max: null,
				tickDecimals: 1
			},
			xaxis: {
				ticks: 5,
				min: [yyyy-4],
				max: yyyy,
				tickDecimals: 0
			},
			grid: {
				backgroundColor: { colors: [ "#fff", "#eee" ] },
				borderWidth: {
					top: 1,
					right: 1,
					bottom: 2,
					left: 2
				}
			}
		});
	});

	</script>
</head>
<body>
      <div class = "col-md-9">
      	<div class='flot-x-axis flot-x-axis'>
    	<div class='flot-tick-label'><h3>Company Income/Expenses(in millions)</h3></div>
      <div id="placeholder"></div>
    </div>
  </div>
</div>
</div>

</body>
