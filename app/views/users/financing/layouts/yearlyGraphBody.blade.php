
   <ul class="nav nav-pills">
      <li><a href="monthlyGraph">Monthly Graph</a></li>
      <li class="active"><a href="yearlyGraph">Yearly Graph</a></li>
   </ul>
      <div>
         <canvas id="canvas" height="350" width="600"></canvas>
      </div>
<script type = "text/javascript">
   var lineChartData = {
   	labels : {{ json_encode($raYear) }},
   	datasets : [
   		{
   			fillColor : "rgba(151,187,205,0.2)",
   			strokeColor : "rgba(151,187,205,1)",
   			pointColor : "rgba(151,187,205,1)",
   			pointStrokeColor : "#fff",
   			pointHighlightFill : "#fff",
   			pointHighlightStroke : "rgba(151,187,205,1)",
   			data : {{ json_encode($raIncome) }}
   		},
   		{
   			fillColor : "rgba(151,0,0,0.2)",
   			strokeColor : "rgba(151,0,0,1)",
   			pointColor : "rgba(151,0,0,1)",
   			pointStrokeColor : "#fff",
   			pointHighlightFill : "#fff",
   			pointHighlightStroke : "rgba(151,0,0,1)",
   			data : {{ json_encode($raExpenses) }}
   		}
   	]
   
   }
   
   window.onload = function(){
   var ctx = document.getElementById("canvas").getContext("2d");
   window.myLine = new Chart(ctx).Line(lineChartData, {
   	responsive: true
   });
   }
</script>