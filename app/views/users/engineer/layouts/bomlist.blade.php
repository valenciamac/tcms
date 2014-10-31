<?php
$item1 = 0;
?>
@foreach($masonry as $mason)
<?php 
      $piece1 = $mason->nopieces;
            $p1 = $piece1 + $item1;
            $item1 = $p1;

?>
@endforeach

<?php
$item2 = 0;
?>
@foreach($formworks as $form)
<?php 
      $piece2 = $form->nopieces;
            $p2 = $piece2 + $item2;
            $item2 = $p2;

?>
@endforeach

<?php
$item3 = 0;
?>
@foreach($steel as $bakal)
<?php 
      $piece3 = $bakal->nopieces;
            $p3 = $piece3 + $item3;
            $item3 = $p3;

?>
@endforeach

<?php
$item4 = 0;
?>
@foreach($carpentry as $carp)
<?php 
      $piece4 = $carp->nopieces;
            $p4 = $piece4 + $item4;
            $item4 = $p4;

?>
@endforeach

<?php
$item5 = 0;
?>
@foreach($thinmistry as $tin)
<?php 
      $piece5 = $tin->nopieces;
            $p5 = $piece5 + $item5;
            $item5 = $p5;

?>
@endforeach

<?php
$item6 = 0;
?>
@foreach($truss as $rus)
<?php 
      $piece6 = $rus->nopieces;
            $p6 = $piece6 + $item6;
            $item6 = $p6;

?>
@endforeach

<?php
$item7 = 0;
?>
@foreach($hardware as $hard)
<?php 
      $piece7 = $hard->nopieces;
            $p7 = $piece7 + $item7;
            $item7 = $p7;

?>
@endforeach

<?php
$item8 = 0;
?>
@foreach($tile as $elit)
<?php 
      $piece8 = $elit->nopieces;
            $p8 = $piece8 + $item8;
            $item8 = $p8;

?>
@endforeach

<?php
$item9 = 0;
?>
@foreach($door as $pinto)
<?php 
      $piece9 = $pinto->nopieces;
            $p9 = $piece9 + $item9;
            $item9 = $p9;

?>
@endforeach

<?php
$item10 = 0;
?>
@foreach($electrical as $elect)
<?php 
      $piece10 = $elect->nopieces;
            $p10 = $piece10 + $item10;
            $item10 = $p10;

?>
@endforeach

<?php
$item11 = 0;
?>
@foreach($plumbing as $plum)
<?php 
      $piece11 = $plum->nopieces;
            $p11 = $piece11 + $item11;
            $item11 = $p11;

?>
@endforeach

<?php
$item12 = 0;
?>
@foreach($paint as $pintura)
<?php 
      $piece12 = $pintura->nopieces;
            $p12 = $piece12 + $item12;
            $item12 = $p12;

?>
@endforeach
<?php
$wholeItem = $item1+$item2+$item3+$item4+$item5+$item6+$item7+$item8+$item9+$item10+$item11+$item12;
?>

<h5>Masonry and Concrete Works 
    @if($masonry->count())
                   {{number_format(($p1/$wholeItem)*100,2)}}%
                   @endif
</h5>
            @if($masonry->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item1 = 0;
            ?>
            @foreach($masonry as $mason)
            
            <tr>
            @if(!empty($mason->edit_this))
            <td><span class="label label-primary">{{($mason->edit_this/$mason->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
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
   <td colspan="5"></td>
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
   
                  <h5>FormWorks 
                    @if($formworks->count())
                   {{number_format(($p2/$wholeItem)*100,2)}}%
                   @endif
                  </h5>
    @if($formworks->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item2 = 0;
            ?>
            @foreach($formworks as $form)
         
            <tr>
            @if(!empty($form->edit_this))
            <td><span class="label label-primary">{{($form->edit_this/$form->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $form->itemdesc }}</td>
            <td>{{ number_format($form->nopieces)}}</td>
            <td>{{ $form->unitmeasure }}</td>
           <td class = "peso">{{ number_format($form->unitprice,2) }}</td>
            <?php
            $total2 =  $form->nopieces * $form->unitprice;
            $piece2 = $form->nopieces;
            $p2 = $piece2 + $item2;
            $item2 = $p2;

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
                   <h5>Steel Reinforcement 
                    @if($steel->count())
                   {{number_format(($p3/$wholeItem)*100,2)}}%
                   @endif
                   </h5>
                   @if($steel->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item3 = 0; 
            ?>
            @foreach($steel as $bakal)
         
            <tr>
            @if(!empty($bakal->edit_this))
            <td><span class="label label-primary">{{($bakal->edit_this/$bakal->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $bakal->itemdesc }}</td>
            <td>{{ number_format($bakal->nopieces)}}</td>
            <td>{{ $bakal->unitmeasure }}</td>
           <td class = "peso">{{ number_format($bakal->unitprice,2) }}</td>
            <?php
            $total3 =  $bakal->nopieces * $bakal->unitprice;
            $piece3 = $bakal->nopieces;
            $p3 = $piece3 + $item3;
            $item3 = $p3;

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
                   <h5>Carpentry Works 
                    @if($carpentry->count())
                   {{number_format(($p4/$wholeItem)*100,2)}}%
                   @endif
                   </h5>
                   @if($carpentry->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item4 = 0;
            ?>
            <tr>
            @if(!empty($carp->edit_this))
            <td><span class="label label-primary">{{($carp->edit_this/$carp->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $carp->itemdesc }}</td>
            <td>{{ number_format($carp->nopieces)}}</td>
            <td>{{ $carp->unitmeasure }}</td>
           <td class = "peso">{{ number_format($carp->unitprice,2) }}</td>
            <?php
            $total4 =  $carp->nopieces * $carp->unitprice;
            $piece4 = $carp->nopieces;
            $p4 = $piece4 + $item4;
            $item4 = $p4;

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
         <h5>Tinsmithry Works 
                    @if($thinmistry->count())
                   {{number_format(($p5/$wholeItem)*100,2)}}%
                   @endif
         </h5>
@if($thinmistry->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item5 = 0;
            ?>
            @foreach($thinmistry as $tin)
         
            <tr>
            @if(!empty($tin->edit_this))
            <td><span class="label label-primary">{{($tin->edit_this/$tin->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $tin->itemdesc }}</td>
            <td>{{ number_format($tin->nopieces)}}</td>
            <td>{{ $tin->unitmeasure }}</td>
           <td class = "peso">{{ number_format($tin->unitprice,2) }}</td>
            <?php
            $total5 =  $tin->nopieces * $tin->unitprice;
            $piece5 = $tin->nopieces;
            $p5 = $piece5 + $item5;
            $item5 = $p5;

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
                   <h5>Steel Truss 
                    @if($truss->count())
                   {{number_format(($p6/$wholeItem)*100,2)}}%
                   @endif
                   </h5>
        @if($truss->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item6 = 0;
            ?>
            @foreach($truss as $rus)
         
            <tr>
            @if(!empty($rus->edit_this))
            <td><span class="label label-primary">{{($rus->edit_this/$rus->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $rus->itemdesc }}</td>
            <td>{{ number_format($rus->nopieces)}}</td>
            <td>{{ $rus->unitmeasure }}</td>
            <td class = "peso">{{ number_format($rus->unitprice,2) }}</td>
            <?php
            $total6 =  $rus->nopieces * $rus->unitprice;
            $piece6 = $rus->nopieces;
            $p6 = $piece6 + $item6;
            $item6 = $p6;
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
                   <h5>Hardwares 
                    @if($hardware->count())
                   {{number_format(($p7/$wholeItem)*100,2)}}%
                   @endif
                   </h5>
                   @if($hardware->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item7 = 0;
            ?>
            @foreach($hardware as $hard)
         
            <tr>
            @if(!empty($hard->edit_this))
            <td><span class="label label-primary">{{($hard->edit_this/$hard->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $hard->itemdesc }}</td>
            <td>{{ number_format($hard->nopieces)}}</td>
            <td>{{ $hard->unitmeasure }}</td>
           <td class = "peso">{{ number_format($hard->unitprice,2) }}</td>
            <?php
            $total7 =  $hard->nopieces * $hard->unitprice;
            $piece7 = $hard->nopieces;
            $p7 = $piece7 + $item7;
            $item7 = $p7;

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
                   <h5>Tile Works 
                    @if($tile->count())
                   {{number_format(($p8/$wholeItem)*100,2)}}%
                   @endif
                   </h5>
        @if ($tile->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item8 = 0;
            ?>
            @foreach($tile as $elit)
         
            <tr>
            @if(!empty($elit->edit_this))
            <td><span class="label label-primary">{{($elit->edit_this/$elit->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $elit->itemdesc }}</td>
            <td>{{ number_format($elit->nopieces)}}</td>
            <td>{{ $elit->unitmeasure }}</td>
          <td class = "peso">{{ number_format($elit->unitprice,2) }}</td>
            <?php
            $total8 =  $elit->nopieces * $elit->unitprice;
            $piece8 = $elit->nopieces;
            $p8 = $piece8 + $item8;
            $item8 = $p8;

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
  <h5>Doors and Windows 
    @if($door->count())
   {{number_format(($p9/$wholeItem)*100,2)}}%
   @endif
  </h5>
@if ($door->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item9 = 0;
            ?>
            @foreach($door as $pinto)
         
            <tr>
            @if(!empty($pinto->edit_this))
            <td><span class="label label-primary">{{($pinto->edit_this/$pinto->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $pinto->itemdesc }}</td>
            <td>{{ number_format($pinto->nopieces)}}</td>
            <td>{{ $pinto->unitmeasure }}</td>
            <td class = "peso">{{ number_format($pinto->unitprice,2) }}</td>
            <?php
            $total9 =  $pinto->nopieces * $pinto->unitprice;
            $piece9 = $pinto->nopieces;
            $p9 = $piece9 + $item9;
            $item9 = $p9;

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
                   <h5>Electrical Works 
                    @if($electrical->count())
                   {{number_format(($p10/$wholeItem)*100,2)}}%
                   @endif
                   </h5>
                   @if ($electrical->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item10 = 0;
            ?>
            @foreach($electrical as $elect)
         
            <tr>
            @if(!empty($elect->edit_this))
            <td><span class="label label-primary">{{($elect->edit_this/$elect->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $elect->itemdesc }}</td>
            <td>{{ number_format($elect->nopieces)}}</td>
            <td>{{ $elect->unitmeasure }}</td>
        <td class = "peso">{{ number_format($elect->unitprice,2) }}</td>
            <?php
            $total10 =  $elect->nopieces * $elect->unitprice;
            $piece10 = $elect->nopieces;
            $p10 = $piece10 + $item10;
            $item10 = $p10;

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
                   <h5>Plumbing Works 
                   @if($plumbing->count())
                   {{number_format(($p11/$wholeItem)*100,2)}}%
                   @endif</h5>
                   @if ($plumbing->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item11 = 0;
            ?>
            @foreach($plumbing as $plum)
         
            <tr>
            @if(!empty($plum->edit_this))
            <td><span class="label label-primary">{{($plum->edit_this/$plum->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $plum->itemdesc }}</td>
            <td>{{ number_format($plum->nopieces)}}</td>
            <td>{{ $plum->unitmeasure }}</td>
           <td class = "peso">{{ number_format($plum->unitprice,2) }}</td>
            <?php
            $total11 =  $plum->nopieces * $plum->unitprice;
            $piece11 = $plum->nopieces;
            $p11 = $piece11 + $item11;
            $item11 = $p11;

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
                          <h5>Painting Works 
                            @if($plumbing->count())
                   {{number_format(($p12/$wholeItem)*100,2)}}%
                   @endif
                          </h5>
                          @if ($paint->count())
<table class="table table-bordered" style="font-size:13px;">
          <thead>
            <tr>
            <th>Status</th>
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
            $item12 = 0;
            ?>
            @foreach($paint as $pintura)
         
            <tr>
            @if(!empty($pintura->edit_this))
            <td><span class="label label-primary">{{($pintura->edit_this/$pintura->nopieces)*100}}%</span></td>
            @else
            <td><span class="label label-danger">0%</span></td>
            @endif
            <td>{{ $pintura->itemdesc }}</td>
            <td>{{ number_format($pintura->nopieces)}}</td>
            <td>{{ $pintura->unitmeasure }}</td>
<td class = "peso">{{ number_format($pintura->unitprice,2) }}</td>
            <?php
            $total12 =  $pintura->nopieces * $pintura->unitprice;
            $piece12 = $pintura->nopieces;
            $p12 = $piece12 + $item12;
            $item12 = $p12;

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