   <!-- content here -->
      <div class="span7">
        
            
            <h3>Purchases this week</h3><input type="text" placeholder="search" id="searchweekpo">    
<table class="table table-striped">
   <thead>
      <tr>
         <th>PO#</th>
         <th>Items</th>
         <th>Project name</th>
         <th>Deliver to</th>
         <th>Supplier</th>
         <th>Date created</th>
         <th>Status</th>
      </tr>                
   </thead>
   
   <tbody id="weekpo">
  
   @foreach($po as $pur)
   <tr>
   	<td>{{$pur->po}}</td>
   	<td>{{$pur->item->count()}}</td>
   	<td>{{$pur->project->project_name}}</td>
   	<td>{{$pur->deliverTo}}</td>
   	<td>{{$pur->suppler_name}}</td>
   	<td>{{$pur->created_at->toFormattedDateString()}}</td>
   	@if(empty($proj->complete))
      <td><span class="label label-danger">Not delivered</span></td>
      @else
         <td><span class="label label-primary">Delivered all</span></td>   
      @endif     </tr>
   @endforeach
   
   </tbody>
</table>
{{HTML::script('js/jquery-1.9.1.min.js')}}
{{HTML::script('js/jquery.fastLiveFilter.js')}}
<script type="text/javascript">
      $(document).ready(function(){
       $(function() {   
           $('#searchweekpo').fastLiveFilter('#weekpo');
             });
         });
</script>
</div>
