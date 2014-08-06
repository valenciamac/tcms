<div class="col-md-9">
	{{Form::open(array('route' => 'invoice.store','class'=>'form-inline','role'=>'form'))}}
@foreach($po as $ponum)
	<h4>PO Number:&nbsp;{{$ponum->po}}</h4>
@endforeach
	<div class="invoice pull-right">
		<div class="form-group">
        	<input type="text" name="si" class="form-control">
        </div>
    	<div class="form-group">
	        <select class="form-control">
			  <option value="si">Sales Invoice</option>
			  <option value="dr">Delivery Reports</option>
			</select>
		</div>
	</div>
		<table class="table table-bordered content" style="font-size:13px;">
	      <thead>
	         <tr>
	            <th>Item</th>
	            <th>Description</th>
	            <th>Quantity</th>
	            <th>Delivered</th>
	            <th>Completed</th>
	         </tr>
	      </thead>
	      <tbody>
	      @foreach($item as $purchase)
	         <tr>
	            <td>{{$purchase->iname}}</td>
	            <td>{{$purchase->desc}}</td>
	            <td>{{$purchase->qty}}</td>
	            <td><input type="text" class="form-control addinvoice number" placeholder="{{$purchase->delivered}}"></td>
	            <td></td>
	         </tr>
	      @endforeach
	      </tbody>
	   </table>
    {{Form::close()}}
    
</div>
</div>
</div>
</div>
</div>
</div>