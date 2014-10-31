@foreach($modelhouse as $bahay)
Model Name:{{ucwords($bahay->modelName)}}


            <h5>Masonry and Concrete Works</h5>
            {{Form::open(array('route' => 'masonry.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#mason">
          Add Items
        </a>
    <div id="mason" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
      <div class="form-inline" style="padding-bottom:45px;">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
        <div class="form-group">
                <div class="col-sm-9">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-9">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-9">
                <input name="measure" placeholder="Unit of Measure" class="form-control">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-9">
                <input name="unitprice" placeholder="Unit Cost" class="form-control">
                </div>
                </div> 
        
      </div>
<div>
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      
      </div>
      <hr>
      </div>
      </div>
      {{Form::close()}} 


            @if($masonry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary = 0;
            ?>
            @foreach($masonry as $mason)
            
            <tr>
            <td>{{ $mason->itemdesc }}</td>
            <td>{{ number_format($mason->nopieces)}}</td>
            <td>{{ $mason->unitmeasure }}</td>
            <td class = "peso">{{ number_format($mason->unitprice,2) }}</td>
            <?php
            $total =  $mason->nopieces * $mason->unitprice;

            $sum = $summary+$total;
            $summary = $sum;
            ?>
          <td class="peso">{{number_format($total,2)}}</td>
            </tr>
            @endforeach
            @if ($masonry->count())
   <td colspan="4"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   
                  <h5>FormWorks</h5>
{{Form::open(array('route' => 'formworks.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#formworks">
          Add Formworks Details
        </a>
    <div id="formworks" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
     
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
      </div>
      
    @if($formworks->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
             <?php
            $summary2 = 0;
            ?>
            @foreach($formworks as $form)
         
            <tr>
            <td>{{ $form->id }}</td>
            <td>{{ $form->itemdesc }}</td>
            <td>{{ number_format($form->nopieces)}}</td>
            <td>{{ $form->unitmeasure }}</td>
           <td class = "peso">{{ number_format($form->unitprice,2) }}</td>
            <?php
            $total2 =  $form->nopieces * $form->unitprice;

            $sum2 = $summary2+$total2;
            $summary2 = $sum2;
            ?>
          <td class="peso">{{number_format($total2,2)}}</td>
            </tr>
            @endforeach
            @if ($formworks->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary2,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
          </tbody>
          </table>
        @endif
                   <h5>Steel Reinforcement</h5>
{{Form::open(array('route' => 'steel.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#steel">
          Add Steel Details
        </a>
    <div id="steel" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
    
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
      </div>  
<div style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      
      </div><hr>
      </div>
                   @if($steel->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary3=0; 
            ?>
            @foreach($steel as $bakal)
         
            <tr>
            <td>{{ $bakal->id }}</td>
            <td>{{ $bakal->itemdesc }}</td>
            <td>{{ number_format($bakal->nopieces)}}</td>
            <td>{{ $bakal->unitmeasure }}</td>
           <td class = "peso">{{ number_format($bakal->unitprice,2) }}</td>
            <?php
            $total3 =  $bakal->nopieces * $bakal->unitprice;

            $sum3 = $summary3+$total3;
            $summary3 = $sum3;
            ?>
          <td class="peso">{{number_format($total3,2)}}</td>
            </tr>
            @endforeach
            @if ($steel->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary3,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
          </tbody>
          </table>
         @endif
                   <h5>Carpentry Works</h5>
{{Form::open(array('route' => 'carpentry.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#carpentry">
          Add Carpentry Details
        </a>
    <div id="carpentry" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
     
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
    
      </div>

                   @if($carpentry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead> 
            <tbody>
            @foreach($carpentry as $carp)
         
            <?php
            $summary4 = 0;
            ?>
            <tr>
            <td>{{ $carp->id }}</td>
            <td>{{ $carp->itemdesc }}</td>
            <td>{{ number_format($carp->nopieces)}}</td>
            <td>{{ $carp->unitmeasure }}</td>
           <td class = "peso">{{ number_format($carp->unitprice,2) }}</td>
            <?php
            $total4 =  $carp->nopieces * $carp->unitprice;

            $sum4 = $summary4+$total4;
            $summary4 = $sum4;
            ?>
          <td class="peso">{{number_format($total4,2)}}</td>
            </tr>
            @endforeach
            @if($carpentry->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary4,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
         @endif
         <h5>Tinsmithry Works</h5>
{{Form::open(array('route' => 'thinmistry.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#thinmistry">
          Add Tinsmithry Details
        </a>
    <div id="thinmistry" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
   
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
   
      </div>


@if($thinmistry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary5 =0;
            ?>
            @foreach($thinmistry as $tin)
         
            <tr>
            <td>{{ $tin->id }}</td>
            <td>{{ $tin->itemdesc }}</td>
            <td>{{ number_format($tin->nopieces)}}</td>
            <td>{{ $tin->unitmeasure }}</td>
           <td class = "peso">{{ number_format($tin->unitprice,2) }}</td>
            <?php
            $total5 =  $tin->nopieces * $tin->unitprice;

            $sum5 = $summary5+$total5;
            $summary5 = $sum5;
            ?>
          <td class="peso">{{number_format($total5,2)}}</td>
            </tr>
            @endforeach
            @if ($thinmistry->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary5,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
         @endif
                   <h5>Steel Truss</h5>
{{Form::open(array('route' => 'truss.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#truss">
          Add Steel Truss Details
        </a>
    <div id="truss" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
     
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
    
      </div>
        @if($truss->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary6 = 0;
            ?>
            @foreach($truss as $rus)
         
            <tr>
            <td>{{ $rus->id }}</td>
            <td>{{ $rus->itemdesc }}</td>
            <td>{{ number_format($rus->nopieces)}}</td>
            <td>{{ $rus->unitmeasure }}</td>
            <td class = "peso">{{ number_format($rus->unitprice,2) }}</td>
            <?php
            $total6 =  $rus->nopieces * $rus->unitprice;

            $sum6 = $summary6+$total6;
            $summary6 = $sum6;
            ?>
          <td class="peso">{{number_format($total6,2)}}</td>
            </tr>
            @endforeach
            @if ($truss->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary6,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
          @endif
                   <h5>Hardwares</h5>

{{Form::open(array('route' => 'hardware.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#hardware">
          Add Hardware Details
        </a>
    <div id="hardware" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
     
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
     
      </div>



                   @if($hardware->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary7 = 0;
            ?>
            @foreach($hardware as $hard)
         
            <tr>
            <td>{{ $hard->id }}</td>
            <td>{{ $hard->itemdesc }}</td>
            <td>{{ number_format($hard->nopieces)}}</td>
            <td>{{ $hard->unitmeasure }}</td>
           <td class = "peso">{{ number_format($hard->unitprice,2) }}</td>
            <?php
            $total7 =  $hard->nopieces * $hard->unitprice;

            $sum7 = $summary7+$total7;
            $summary7 = $sum7;
            ?>
          <td class="peso">{{number_format($total7,2)}}</td>
            </tr>
            @endforeach
            @if ($hardware->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary7,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
        @endif
                   <h5>Tile Works</h5>
{{Form::open(array('route' => 'tile.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#tile">
          Add Tile Works Details
        </a>
    <div id="tile" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
      
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
     
      </div>

        @if ($tile->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary8= 0;
            ?>
            @foreach($tile as $elit)
         
            <tr>
            <td>{{ $elit->id }}</td>
            <td>{{ $elit->itemdesc }}</td>
            <td>{{ number_format($elit->nopieces)}}</td>
            <td>{{ $elit->unitmeasure }}</td>
          <td class = "peso">{{ number_format($elit->unitprice,2) }}</td>
            <?php
            $total8 =  $elit->nopieces * $elit->unitprice;

            $sum8 = $summary8+$total8;
            $summary8 = $sum8;
            ?>
          <td class="peso">{{number_format($total8,2)}}</td>
            </tr>
            @endforeach
            @if ($tile->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary8,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
  @endif
  <h5>Doors and Windows</h5>

{{Form::open(array('route' => 'door.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#door">
          Add Door and Windows Details
        </a>
    <div id="door" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
    
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>

      </div>

@if ($door->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary9 = 0;
            ?>
            @foreach($door as $pinto)
         
            <tr>
            <td>{{ $pinto->id }}</td>
            <td>{{ $pinto->itemdesc }}</td>
            <td>{{ number_format($pinto->nopieces)}}</td>
            <td>{{ $pinto->unitmeasure }}</td>
            <td class = "peso">{{ number_format($pinto->unitprice,2) }}</td>
            <?php
            $total9 =  $pinto->nopieces * $pinto->unitprice;

            $sum9 = $summary9+$total9;
            $summary9 = $sum9;
            ?>
          <td class="peso">{{number_format($total9,2)}}</td>
            </tr>
            @endforeach
            @if ($door->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary9,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       @endif
                   <h5>Electrical Works</h5>
{{Form::open(array('route' => 'electrical.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#electrical">
          Add Electrical Details
        </a>
    <div id="electrical" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
     
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div>  
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
      </div>
    

                   @if ($electrical->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary10=0;
            ?>
            @foreach($electrical as $elect)
         
            <tr>
            <td>{{ $elect->id }}</td>
            <td>{{ $elect->itemdesc }}</td>
            <td>{{ number_format($elect->nopieces)}}</td>
            <td>{{ $elect->unitmeasure }}</td>
        <td class = "peso">{{ number_format($elect->unitprice,2) }}</td>
            <?php
            $total10 =  $elect->nopieces * $elect->unitprice;

            $sum10 = $summary10+$total10;
            $summary10 = $sum10;
            ?>
          <td class="peso">{{number_format($total10,2)}}</td>
            </tr>
            @endforeach
            @if ($electrical->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary10,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
     @endif
                   <h5>Plumbing Works</h5>
{{Form::open(array('route' => 'plumbing.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#plumbing">
          Add Plumbing Details
        </a>
    <div id="plumbing" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>
    
        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
      </div>
  

                   @if ($plumbing->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary11=0;
            ?>
            @foreach($plumbing as $plum)
         
            <tr>
            <td>{{ $plum->id }}</td>
            <td>{{ $plum->itemdesc }}</td>
            <td>{{ number_format($plum->nopieces)}}</td>
            <td>{{ $plum->unitmeasure }}</td>
           <td class = "peso">{{ number_format($plum->unitprice,2) }}</td>
            <?php
            $total11 =  $plum->nopieces * $plum->unitprice;

            $sum11 = $summary11+$total11;
            $summary11 = $sum11;
            ?>
          <td class="peso">{{number_format($total11,2)}}</td>
            </tr>
            @endforeach
            @if ($plumbing->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso"> 
           Php {{number_format($summary11,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
        @endif
                          <h5>Painting Works</h5>

{{Form::open(array('route' => 'paint.store','class'=>'form-horizontal','role'=>'form'))}}
 <div class="panel-group" id="accordion">
   <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#paint">
          Add Paint Details
        </a>
    <div id="paint" class="panel-collapse collapse">
      <div class="panel-body">
      <hr>

        <div class="form-inline">
        <input type="hidden" name="modelId" value="{{$bahay->id}}">
    
        <div class="form-group">
                <div class="col-sm-6">
                <input name="itemdesc" class="form-control" placeholder="Item Description">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="nopieces" class="form-control" placeholder="Number of Pieces">
                </div>
                </div> 
            <div class="form-group">
                <div class="col-sm-6">
                <input name="measure" class="form-control" placeholder="Unit of Measure">
                </div>
                </div>
            <div class="form-group">
                <div class="col-sm-6">
                <input name="unitprice" class="form-control" placeholder="Unit Cost">
                </div>
                </div> 
        
<div class="pull-right" style="padding-top:20px;">
         <input type="submit" class="btn btn-primary " value="Save">
         <input type="reset" class="btn btn-primary " value="Clear">
      </div>
{{Form::close()}} 
      </div>
      </div><hr>
      </div>
      </div>

                          @if ($paint->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total Cost</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary12=0;
            ?>
            @foreach($paint as $pintura)
         
            <tr>
            <td>{{ $pintura->id }}</td>
            <td>{{ $pintura->itemdesc }}</td>
            <td>{{ number_format($pintura->nopieces)}}</td>
            <td>{{ $pintura->unitmeasure }}</td>
<td class = "peso">{{ number_format($pintura->unitprice,2) }}</td>
            <?php
            $total12 =  $pintura->nopieces * $pintura->unitprice;

            $sum12 = $summary12+$total12;
            $summary12 = $sum12;
            ?>
          <td class="peso">{{number_format($total12,2)}}</td>
            </tr>
            @endforeach
            @if ($paint->count())
   <td colspan="5"></td>
         <td class="row">
         <div class="col-xs-6">
         <div>Total:</div>
         </div>
         <div class="col-xs-6">
         <div class="peso">
           Php {{number_format($summary12,2)}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
@endif



      @endforeach
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
