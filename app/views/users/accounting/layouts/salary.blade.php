
   <h2>View PAYDATES</h2>
     <form class="form-inline" action="salary" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text"  id="searchrange" placeholder="search" name="search">
        </div>
      </div> 
</form>
<table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
            <th>Paydate</th>
            <th>Paydate End </th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody id="range">
            @foreach($payroll as $pay)
            <tr>
            <td>{{ $pay->paydate }}</td>
            <td>{{ $pay->paydateend }}</td>
            <td><a href="{{$pay->paydate}}"  class="btn btn-primary btn-full-width"><i class="fa fa-file-o">View Employee </i></a></td>
            
            </tr>
            @endforeach
               </tbody>
        </table>
