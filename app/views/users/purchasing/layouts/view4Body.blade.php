<div class="col-md-9">
<ul class="nav nav-tabs nav-justified">
<li class=""><a href="payment">Make Request For Payment</a></li>
<li class=""><a href="view3">View Request For Payment Details </a></li>
<li class="active"><a href="view4">View Requet For Payment</a></li>


</ul>
        
    <!-- content here -->
    <form class="form-inline" action="view4" role="form">
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
            <th>Po Number</th>
            <th>DR Number</th>
            <th>SI Number</th>
            <th>CI Number</th>
            <th>SO Number</th>
            <th>Others</th>
            <th>Description</th>
            <th>Amount</th>


          </tr>
        </thead>
        <tbody>
         
          @foreach ($detail as $info)
           <tr>
            <td>{{ $info->id}}</td>
            <td>{{ $info->controlNo}}</td>
            <td>{{ $info->po_number }}</td>
            <td>{{ $info->dr_number }}</td>
            <td>{{ $info->si_number }}</td>
            <td>{{ $info->ci_number }}</td>
            <td>{{ $info->so_number }}</td>
            <td>{{ ucwords($info->others) }}</td> 
            <td>{{ ucwords($info->description) }}</td> 
            <td>{{ $info->amount }}</td>

             <td><a href="info/{{$info->id}}"><i class="fa fa-pencil-square-o"></i></a>
              <a href="info/{{$info->id}}/delete"><i class="fa fa-trash-o"></i></a>
            </td>  
          </tr>
          
          @endforeach

          
        </tbody>
      </table>
       <center>
        {{$detail->links()}}
      </center>




      </div>
    </div>
    
  </div>
</div>