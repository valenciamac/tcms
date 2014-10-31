<div ng-app ng-controller="CheckItemController" class="bottom-pad">
</div>
   <form class="form-inline" action="checkvouchersdetails" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control search" type="text" placeholder="Search" ng-model="search">
         </div>
      </div>
   </form>

   <!--  -->

     <table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th style="text-align:center;">No</th>
            <th style="text-align:center;">PO #</th>
            <th style="text-align:center;">Project</th>
            <th style="text-align:center;">Check #</th>
            <th style="text-align:center;">Check Date</th>
            <th style="text-align:center;">Payee</th>
            <th style="text-align:center;">Bank</th>
            <th style="text-align:center;">Amount</th>
         </tr>
      </thead>
     <tbody>
        <tr class="contents">
         <?php
       $summary = 0;
       ?>
        @foreach($checkitem as $vitem)
          <td>{{$vitem->checkvouchers_checkno}}</td>
          <td>{{$vitem->project}}</td>
          <td>{{$vitem->po_po}}</td>
          <td>{{$vitem->check}}</td>
          <td>{{$vitem->checkdate}}</td>
          <td>{{$vitem->payee}}</td>
          <td>{{$vitem->bank}}</td>
          <td>{{$vitem->amount}}</td> 
         </tr>
         <?php
         $total = 0;
         $total =  $total + $vitem->amount;
         $summary =  $total+$summary;
         ?>
        @endforeach
        <td><p><b>Total:</b></p></td>
         <td class="row" colspan="7">
         <div class="peso">
          <p><b>Php {{$summary}}</b></p>
         </div>
         </td>
      </tbody>
   </table>

      <div class="pull-right" style="margin-bottom:50px;">
      <a href="../checkvouchers" class="btn btn-primary">Done</a>
      </div>
</div>
</div>

    