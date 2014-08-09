<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
<style>
html {
font-family: sans-serif;
font-size: 11px;
}
body {
margin: 0;
}
</style>

<?php
   $now = time();
   $z = date("F d, Y", $now);
?>

<div align = "left" style="margin-left:10px">
   <table style="font-size:10px;">
      <div align = "left" style="margin-left:2px">ST. JUDE TRADING & CONSTRUCTION CORPORATION
         <p style="font-size:8px; margin-top:-2px">Plan Bldg. Unit 14, Km.40 Nat'l Hiway Brgy. Macabling, Sta. Rosa, Laguna</p>
         JANUARY - {{strtoupper($z)}}</br>

         <table border = "0" style="font-size:10px;">
            <thead>
            <tr>
            <th align="left"><b>INCOME FROM CONTRACTS</b></br></th>
            </tr>
            <tr>
               <th>&nbsp;</th>
               <th>&nbsp;</th>
               <th align="center">JANUARY</th>
               <th>&nbsp;</th>
               <th align="center">FEBRUARY</th>
               <th>&nbsp;</th>
               <th align="center">MARCH</th>
               <th>&nbsp;</th>
               <th align="center">APRIL</th>
               <th>&nbsp;</th>
               <th align="center">MAY</th>
               <th>&nbsp;</th>
               <th align="center">JUNE</th>
               <th>&nbsp;</th>
               <th align="center">JULY</th>
               <th>&nbsp;</th>
               <th align="center">AUGUST</th>
               <th>&nbsp;</th>
               <th align="center">SEPTEMBER</th>
               <th>&nbsp;</th>
               <th align="center">OCTOBER</th>
               <th>&nbsp;</th>
               <th align="center">NOVEMBER</th>
               <th>&nbsp;</th>
               <th align="center">DECEMBER</th>
               <th>&nbsp;</th>
               <th align="center">TOTALS</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($income as $incomes)
            <tr name = "incomeRow">
               <td>{{ ucwords($incomes->contractTitle) }}</td>
               <td></td>
               <td name = "incomeJan" align="right">{{ sprintf('%0.2f',($incomes->contractIncome)) }}</td>
               <td></td>
               <td name = "incomeFeb" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeMar" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeApr" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeMay" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeJun" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeJul" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeAug" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeSep" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeOct" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeNov" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeDec" align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td name = "incomeSum" align="right"></td>
            </tr>
            <!-- <tr>
               <td align="center">Total</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center"></td>
               <td align="right">{{mt_rand();}}</td>
            </tr>
            <tr>
            <td align="left"><b>COST OF CONTRACTS</b></br></td>
            </tr>
            <tr>
               <td>PURCHASE</td>
               <td></td>
               <td align="right">{{ $incomes->contractPurchase }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
            </tr>
            <tr>
               <td>SUB-CON</td>
               <td></td>
               <td align="right">{{ $incomes->contractSubcon }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
            </tr>
            <tr>
               <td>INHOUSE</td>
               <td></td>
               <td align="right">{{ $incomes->contractInhouse }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
            </tr>
            <tr>
               <td>TRUCKING</td>
               <td></td>
               <td align="right">{{ $incomes->contractTrucking }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
            </tr>
            <tr>
               <td>FORMWORKS</td>
               <td></td>
               <td align="right">{{ $incomes->contractFormworks }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
               <td></td>
               <td align="right">{{ sprintf('%0.2f', rand()) }}</td>
            </tr>
            <tr>
               <td align="center">Total</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center">Php</td>
               <td align="right">{{mt_rand();}}</td>
               <td align="center"></td>
               <td align="right">{{mt_rand();}}</td> -->
            </tr>
            @endforeach
            </tbody>
         </table>

         </div>
      </table>
   </div>

<div id = "hiderow" align = "center">
   <table>
      <tr>
         <td><a href = "financialReports">Back</a></td>
         <td><a href="javascript:incomeCalculate();">compute</a></td>
      </tr>
   </table>
</div>

<script type = "text/javascript">
function incomeCalculate() {
   // var incomeRow = $(this).parents('.incomeRow');
   // var incomeSum = incomeRow.find('.incomeJan').val() + incomeRow.find('.incomeFeb').val();
   // incomeSum = roundNumber(incomeSum,2);
   // isNaN(incomeSum) ? incomeRow.find('.incomeSum').html("N/A") : incomeRow.find('.incomeSum').html(incomeSum);
   var incomeJan = document.getElementsByName('incomeJan');
   var incomeFeb = document.getElementsByName('incomeFeb');
   var incomeMar = document.getElementsByName('incomeMar');
   var incomeApr = document.getElementsByName('incomeApr');
   var incomeMay = document.getElementsByName('incomeMay');
   var incomeJun = document.getElementsByName('incomeJun');
   var incomeJul = document.getElementsByName('incomeJul');
   var incomeAug = document.getElementsByName('incomeAug');
   var incomeSep = document.getElementsByName('incomeSep');
   var incomeOct = document.getElementsByName('incomeOct');
   var incomeNov = document.getElementsByName('incomeNov');
   var incomeDec = document.getElementsByName('incomeDec');
   var incomeSum = document.getElementsByName('incomeSum');
   incomeSum.value = parseFloat(incomeJan)+parseFloat(incomeFeb)+parseFloat(incomeMar)+parseFloat(incomeApr)+parseFloat(incomeMay)+parseFloat(incomeJun)+parseFloat(incomeJul)+parseFloat(incomeAug)+parseFloat(incomeSep)+parseFloat(incomeOct)+parseFloat(incomeNov)+parseFloat(incomeDec);
   if (!isNaN(incomeSum)) {
      document.getElementById('incomeSum').value = incomeSum;
   }
}
</script>