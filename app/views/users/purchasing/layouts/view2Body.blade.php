<div class="col-md-9">
<ul class="nav nav-tabs nav-justified">
<li class=""><a href="purchaseOrder">Make Purchase Order</a></li>
<li class=""><a href="view">View PO Details</a></li>
<li class="active"><a href="view2">View Item Details</a></li>


</ul>
        
    <!-- content here -->
    <form class="form-inline" action="view2" role="form">
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
            <th>Po</th>
            <th>Quantity</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
         
          @foreach ($item as $product)
           <tr>
            <td>{{ $product->id}}</td>
            <td>{{ $product->po }}</td>
            <td>{{ $product->qty }}</td>  
            <td>{{ ucwords($product->name) }}</td>
            <td>{{ ucwords($product->desc) }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->amount }}</td>
             <td><a href="product/{{$product->id}}"><i class="fa fa-pencil-square-o"></i></a>
              <a href="product/{{$product->id}}/delete"><i class="fa fa-trash-o"></i></a>
            </td>  
          </tr>
          
          @endforeach

          
        </tbody>
      </table>
       <center>
        {{ $item->links() }}
      </center>




      </div>
    </div>
    
  </div>
</div>