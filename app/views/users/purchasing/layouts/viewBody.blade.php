<div class="col-md-9">
        
    <!-- content here -->
    <form class="form-inline" action="view" role="form">
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
            <th>suppler_name</th>
            <th>prs</th>
            <th>po</th>
            <th>po_date</th>
            <th>address</th>
            <th>terms</th>
            <th>supplier_code</th>
            <th>deliverTo</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($po as $purchase)
           <tr>
            <td>{{ $purchase->id}}</td>
            <td>{{ ucwords($purchase->suppler_name) }}</td>
            <td>{{ $purchase->prs }}</td>
            <td>{{ $purchase->po }}</td>
            <td>{{ $purchase->po_date }}</td>  
            <td>{{ ucwords($purchase->address)}}</td> 
            <td>{{ $purchase->terms}}</td>
            <td>{{ ucwords($purchase->supplier_code)}}</td>
            <td>{{ ucwords($purchase->deliverTo)}}</td>   
          </tr>
          
          @endforeach

          
        </tbody>
      </table>
       <center>
        {{ $po->links() }}
      </center>




      </div>
    </div>
    
  </div>
</div>