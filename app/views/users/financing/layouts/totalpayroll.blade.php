<div class="col-md-9" >
   <h2>View PAYDATES</h2>
     <form class="form-inline" action="salary" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text" placeholder="search" name="search">
        </div>
      </div> 
</form>
<table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
            <th>Paydate</th>
            <th>Paydate End </th>
            <th>View Payroll Details</th>
            <th>View Graph</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employee as $emp)
            <tr>
            <td>{{ $emp->paydate }}</td>
            <td>{{ $emp->paydateend }}</td>
            <td><a href="super/{{$emp->paydate}}"><i class="fa fa-plus-square-o"></i></a></td>
             <td><a href="superer/{{$emp->paydate}}"><i class="fa fa-plus-square-o"></i></a></td>
            </tr>
            @endforeach
               </tbody>
        </table>


</div>
</div>
</div>
</div>