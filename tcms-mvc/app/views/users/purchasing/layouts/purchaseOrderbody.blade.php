<div class="col-md-9">
   
   <div class="panel-group" id="accordion">

        <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#newpo">
          Create New Purchase Order
        </a>
    <div id="newpo" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
        {{Form::open(array('route' => 'po.store','class'=>'form-horizontal','role'=>'form'))}}
      <div class="row">
         <div class="col-xs-6">
            <label for="exampleInputEmail1">Supplier Name:</label>
            <input type="text" class="form-control input-sm" name="suppler_name">
         </div>
         <div class="col-xs-6">
            <label for="exampleInputEmail1">PO #: </label>
            <input type="text" class="form-control input-sm" name="po" class="inputext" id="po">
         </div>
         <div class="col-xs-6">
            <label for="exampleInputEmail1">PRS #:</label>
            <input type="text" class="form-control input-sm" name="prs">
         </div>
         <!-- <div class="col-lg-6">
            <label>P.O. Date:</label> 
               <input type="text" class="form-control input-sm" name="po_date" >
         </div> -->
         <div class="col-xs-6">
            <label>Address:</label>
            <input type="text" class="form-control input-sm" name="address">
         </div>
         <div class="col-xs-6">
            <label>Terms (Days):</label>
            <input type="text" class="form-control input-sm" name="terms">
         </div>
         <div class="col-xs-6">
            <label>Supplier Code:</label>
            <input type="text" class="form-control input-sm" name="supplier_code">
         </div>
         <div class="col-xs-6">
            <label>Deliver to:</label>
            <input type="text" class="form-control input-sm" name="deliverTo">
         </div>
      </div>
      <!-- button -->
      <div class="submit pull-right">
         <button class="btn btn-primary" type="submit">save</button>
      </div>
      
      </div><!--tab-pane-->
      
</div>

{{Form::close()}}
<hr>
      </div> <!-- collapsible -->
<div>
     @include('users.purchasing.layouts.viewPO')
    </div> <!-- col-md-9 -->

</div>
</div>
