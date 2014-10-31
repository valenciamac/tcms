<!--  <style type="text/css">
   body { font-family: Verdana, Arial, sans-serif; font-size: 12px; }
   #placeholder { width: 700px; height: 400px; }
   </style> -->
<div class = "col-md-9">
  <br/>
   <!-- <ul class="nav nav-pills">
      <li class="active"><a href="monthlyGraph">Monthly Graph</a></li>
      <li><a href="yearlyGraph">Yearly Graph</a></li>
   </ul> -->
   <div>
      <div>
      <canvas id="canvas" height="350" width="600"></canvas>
      <!-- <ul class="nav nav-pills">
      <li class="pull-right"><a href="../incomeSummary">Back</a></li>
    </ul> -->
      </div>
   </div>
   <!-- form action='financeMonthlyRefresh' method="get" class="form-inline" role="form">
      <div class="submit">
         <button class="btn btn-primary" type="submit">Refresh</button>
      </div>
   </form> -->
</div>
</div>
</div>
</div>
</div>
  

  


<script type = "text/javascript">
   var lineChartData = {


    labels : {{json_encode($rmonth)}},
    datasets : [
      {
        fillColor : "rgba(151,187,205,0.2)",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(151,187,205,1)",

        

        data : {{json_encode($rincome)}}


      }
      // {
      //  fillColor : "rgba(151,0,0,0.2)",
      //  strokeColor : "rgba(151,0,0,1)",
      //  pointColor : "rgba(151,0,0,1)",
      //  pointStrokeColor : "#fff",
      //  pointHighlightFill : "#fff",
      //  pointHighlightStroke : "rgba(151,0,0,1)",

      //  <?php 
      //    $totalPayroll = DB::table('payroll')
      //            ->sum('income');

      //    $totalPayroll = sprintf('%0.2f',$totalPayroll);
                
      //  ?>
      //  data :  [{//{$totalPayroll}}, {//{$totalPayroll}}, {//{$totalPayroll}}, {//{$totalPayroll}},
      //    {//{$totalPayroll}}, {//{$totalPayroll}}, {//{$totalPayroll}}, {//{$totalPayroll}},
      //    {//{$totalPayroll}}, {//{$totalPayroll}}, {//{$totalPayroll}}, {//{$totalPayroll}}]
      // }
    ]
   
   }
   
   window.onload = function(){
   var ctx = document.getElementById("canvas").getContext("2d");
   window.myLine = new Chart(ctx).Line(lineChartData, {
    responsive: true, bezierCurve: false
   });
   }
</script>

  