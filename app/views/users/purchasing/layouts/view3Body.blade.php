<div class="col-md-9">
   <ul class="nav nav-tabs nav-justified">
      <li class=""><a href="payment">Make Request For Payment</a></li>
      <li class="active"><a href="view3">View Request For Payment Details </a></li>
      <li class=""><a href="view4">View Requet For Payment</a></li>
   </ul>
   <!-- content here -->
   <form class="form-inline" action="view3" role="form">
      <div class="form-group" >
         <div class="input-inline">
            <input class="form-control" type="text" placeholder="search" name="search">
         </div>
      </div>
   </form>
   <table class="table table-bordered table-hover" style="font-size:13px;">
      <thead>
         <tr>
            <th>Id</th>
            <th>Control Number</th>
            <th>Payee</th>
            <th>Requested DATE</th>
            <th>Reason</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($rfp as $prf)
         <tr>
            <td>{{ $prf->id}}</td>
            <td>{{ $prf->controlNo }}</td>
            <td>{{ ucwords($prf->payee) }}</td>
            <td>{{ $prf->requestedDate}}</td>
            <td>{{ ucwords($prf->reason)}}</td>
            <td><a href="prf/{{$prf->id}}"><i class="fa fa-pencil-square-o"></i></a>
               <a href="prf/{{$prf->id}}/delete"><i class="fa fa-trash-o"></i></a>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <center>
      {{ $rfp->links() }}
   </center>
</div>
</div>
</div>
</div>
