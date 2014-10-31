
<table class="table table-striped">
   <thead>
      <tr>
         <th>Project #</th>
         <th>Name</th>
         <th>Location</th>
         <th>Date Started</th>
         <th>PO</th>
         <th>Inventory</th>
      </tr>                
   </thead>
   
   <tbody id="searchproj">
   
   @foreach($project->slice(0, 10) as $proj)
   <tr class="contents"> 
      <td class="full">{{$proj->id}}</td>
      <td class="full">{{$proj->project_name}}</td>              
      <td class="full">{{$proj->location}}</td>
      <td class="full">{{$proj->created_at->toFormattedDateString()}}</td>
      <td class="full">{{$proj->pos->count()}}</td>
      @if(empty($proj->status))
      <td class="full"><a href="inventory/{{$proj->id}}" class="mybtn btn-primary btn-full-width">View</a></td>
      @else
         <td class="full"><a href="inventory/{{$proj->id}}" class="mybtn btn-default btn-full-width disabled" >View</a></td>
      @endif 
      
   </tr>
   @endforeach
   </tbody>
</table>
</div>
