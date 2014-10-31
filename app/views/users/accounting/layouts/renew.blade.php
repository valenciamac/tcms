
   <h2>View Separated Employee</h2>
     <form class="form-inline" action="renewal" role="form">
    <div class="form-group" >
        <div class="input-inline">
          <input class="form-control" type="text"  id="searchrange" placeholder="search" name="search">
        </div>
      </div> 
</form>
<table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Days Work</th>
            <th>Amount</th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody id="range">
            @foreach($separation as $better)
            <tr>
            <td>{{ $better->id }}</td>
            <td>{{ $better->firstN }}</td>
            <td>{{ $better->middleN }}</td>
            <td>{{ $better->lastN }}</td>
            <td>{{ $better->days_work }}</td>
            <td>{{ $better->amtpay}}</td>
             <td><a href="bet/{{$better->id}}" class="btn btn-primary btn-full-width">Renew Employee</i></a></td>
                
            </tr>
            @endforeach
               </tbody>
        </table>
