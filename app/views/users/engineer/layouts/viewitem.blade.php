

            <h5>Masonry and Concrete Works</h5>
            @if($masonry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $summary = 0;
            ?>
            @foreach($masonry as $mason)
            
            <tr>
            <td>{{ $mason->itemdesc }}</td>
            <td>{{ $mason->nopieces}}</td>
            <td>{{ $mason->unitmeasure }}</td>
            <td class = "peso">{{ $mason->unitprice }}</td>
          	<?php
            $total =  $mason->nopieces * $mason->unitprice;

            $sum = $summary+$total;
            $summary = $sum;
            ?>
          <td class="peso">{{$total}}</td>
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
           Php {{$summary}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       
            @endif
   
                  <h5>FormWorks</h5>
    @if($formworks->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total</th>
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
            <td>{{ $form->nopieces}}</td>
            <td>{{ $form->unitmeasure }}</td>
           <td class = "peso">{{ $form->unitprice }}</td>
          	<?php
            $total2 =  $form->nopieces * $form->unitprice;

            $sum2 = $summary2+$total2;
            $summary2 = $sum2;
            ?>
          <td class="peso">{{$total2}}</td>
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
           Php {{$summary2}}
         </div>
         </div>
         </td>
         </div>
          @endif
          </tbody>
          </table>
        @endif
                   <h5>Steel Reinforcement</h5>
                   @if($steel->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total</th>
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
            <td>{{ $bakal->nopieces}}</td>
            <td>{{ $bakal->unitmeasure }}</td>
           <td class = "peso">{{ $bakal->unitprice }}</td>
          	<?php
            $total3 =  $bakal->nopieces * $bakal->unitprice;

            $sum3 = $summary3+$total3;
            $summary3 = $sum3;
            ?>
          <td class="peso">{{$total3}}</td>
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
           Php {{$summary3}}
         </div>
         </div>
         </td>
         </div>
          @endif
          </tbody>
          </table>
         @endif
                   <h5>Carpentry Works</h5>
                   @if($carpentry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
            <th>Total</th>
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
            <td>{{ $carp->nopieces}}</td>
            <td>{{ $carp->unitmeasure }}</td>
           <td class = "peso">{{ $carp->unitprice }}</td>
          	<?php
            $total4 =  $carp->nopieces * $carp->unitprice;

            $sum4 = $summary4+$total4;
            $summary4 = $sum4;
            ?>
          <td class="peso">{{$total4}}</td>
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
           Php {{$summary4}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
         @endif
         <h5>Tinsmithry Works</h5>
@if($thinmistry->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $tin->nopieces}}</td>
            <td>{{ $tin->unitmeasure }}</td>
           <td class = "peso">{{ $tin->unitprice }}</td>
          	<?php
            $total5 =  $tin->nopieces * $tin->unitprice;

            $sum5 = $summary5+$total5;
            $summary5 = $sum5;
            ?>
          <td class="peso">{{$total5}}</td>
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
           Php {{$summary5}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
         @endif
                   <h5>Steel Truss</h5>
        @if($truss->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $rus->nopieces}}</td>
            <td>{{ $rus->unitmeasure }}</td>
            <td class = "peso">{{ $rus->unitprice }}</td>
          	<?php
            $total6 =  $rus->nopieces * $rus->unitprice;

            $sum6 = $summary6+$total6;
            $summary6 = $sum6;
            ?>
          <td class="peso">{{$total6}}</td>
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
           Php {{$summary6}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
          @endif
                   <h5>Hardwares</h5>
                   @if($hardware->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $hard->nopieces}}</td>
            <td>{{ $hard->unitmeasure }}</td>
           <td class = "peso">{{ $hard->unitprice }}</td>
          	<?php
            $total7 =  $hard->nopieces * $hard->unitprice;

            $sum7 = $summary7+$total7;
            $summary7 = $sum7;
            ?>
          <td class="peso">{{$total7}}</td>
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
           Php {{$summary7}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
        @endif
                   <h5>Tile Works</h5>
        @if ($tile->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $elit->nopieces}}</td>
            <td>{{ $elit->unitmeasure }}</td>
          <td class = "peso">{{ $elit->unitprice }}</td>
          	<?php
            $total8 =  $elit->nopieces * $elit->unitprice;

            $sum8 = $summary8+$total8;
            $summary8 = $sum8;
            ?>
          <td class="peso">{{$total8}}</td>
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
           Php {{$summary8}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
  @endif
  <h5>Doors and Windows</h5>
@if ($door->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $pinto->nopieces}}</td>
            <td>{{ $pinto->unitmeasure }}</td>
            <td class = "peso">{{ $pinto->unitprice }}</td>
          	<?php
            $total9 =  $pinto->nopieces * $pinto->unitprice;

            $sum9 = $summary9+$total9;
            $summary9 = $sum9;
            ?>
          <td class="peso">{{$total9}}</td>
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
           Php {{$summary9}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
       @endif
                   <h5>Electrical Works</h5>
                   @if ($electrical->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $elect->nopieces}}</td>
            <td>{{ $elect->unitmeasure }}</td>
        <td class = "peso">{{ $elect->unitprice }}</td>
          	<?php
            $total10 =  $elect->nopieces * $elect->unitprice;

            $sum10 = $summary10+$total10;
            $summary10 = $sum10;
            ?>
          <td class="peso">{{$total10}}</td>
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
           Php {{$summary10}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
     @endif
                   <h5>Plumbing Works</h5>
                   @if ($plumbing->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $plum->nopieces}}</td>
            <td>{{ $plum->unitmeasure }}</td>
           <td class = "peso">{{ $plum->unitprice }}</td>
          	<?php
            $total11 =  $plum->nopieces * $plum->unitprice;

            $sum11 = $summary11+$total11;
            $summary11 = $sum11;
            ?>
          <td class="peso">{{$total11}}</td>
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
           Php {{$summary11}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
        @endif
                          <h5>Painting Works</h5>
                          @if ($paint->count())
<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Id</th>
            <th>Item Description</th>
            <th>Number of Pieces</th>
            <th>Unit of Measure</th>
            <th>Unit Cost</th>
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
            <td>{{ $pintura->nopieces}}</td>
            <td>{{ $pintura->unitmeasure }}</td>
<td class = "peso">{{ $pintura->unitprice }}</td>
          	<?php
            $total12 =  $pintura->nopieces * $pintura->unitprice;

            $sum12 = $summary12+$total12;
            $summary12 = $sum12;
            ?>
          <td class="peso">{{$total12}}</td>
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
           Php {{$summary12}}
         </div>
         </div>
         </td>
         </div>
          @endif
               </tbody>
        </table>
@endif