@foreach($po as $ponum)

   <h4>PO Number:&nbsp;{{$ponum->id}}</h4>
   <div class="row">
   <div class="col-md-3"> 
  
   
      <table class="table table-bordered content" style="font-size:13px;" id="res">
         <thead>
            <tr>
               <th>SI Number</th>
            </tr>
         </thead>
         <tbody>

         @foreach($si as $sis)
         <tr>
        @if($si->count())
           <td><a href="../invoice/{{$ponum->id}}/{{$sis->num}}" style="color:#000;">{{$sis->num}}</a></td>
        @else
      <td>no receipts yet</td>
      @endif      
         </tr>
         @endforeach
         </tbody>
         </table>

      
  </div>
  <div class="col-md-3">
   
            <table class="table table-bordered content" style="font-size:13px;" id="res">
         <thead>
            <tr>
               <th>CI Number</th>
            </tr>
         </thead>
         <tbody> 
         @foreach($ci as $cis)
         <tr>
        @if ($ci->count())
           <td><a href="../ci/{{$ponum->id}}/{{$cis->num}}">{{$cis->num}}</a> </td>
        @else
        <td>No CI yet</td>
          @endif    
         </tr>
         @endforeach
         </tbody>
         </table>
    
    </div>
  <div class="col-md-3">
   
            <table class="table table-bordered content" style="font-size:13px;" id="res">
         <thead>
            <tr>
               <th>SO Number</th>
            </tr>
         </thead>
         <tbody>
         @foreach($so as $sos)
         <tr>
         @if ($so->count())
           <td><a href="../so/{{$ponum->id}}/{{$sos->num}}">{{$sos->num}}</a></td>
         @endif        
         </tr>
         @endforeach
         </tbody>
         </table>
 
    </div>
  <div class="col-md-3">
    
            <table class="table table-bordered content" style="font-size:13px;" id="res">
         <thead>
            <tr>
               <th>dr Number</th>
            </tr>
         </thead>
         <tbody>
         @foreach($dr as $drs)
         <tr>
        @if ($dr->count())
           <td><a href="../dr/{{$ponum->id}}/{{$drs->num}}">{{$drs->num}}</a></td>
          @endif             
         </tr>
         @endforeach
         </tbody>
         </table>

    </div>
    </div>
    @endforeach<!--end foreach main-->
