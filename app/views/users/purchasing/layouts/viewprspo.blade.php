
<table class="table table-bordered content" style="font-size:13px;">
      <thead>
         <tr>
            <th>PO Number</th>
            <th>Supplier Name</th>
            <th>Project Name</th>
            <th>Address</th>
            <th>Date Created</th>
            <th>Option</th>
         </tr>
      </thead>
      <tbody>
        <tr class="contents">
        @foreach($po as $items)
          <td>{{$items->id}}</td>
          <td>{{$items->suppler_name}}</td>
          <td>{{$items->project->project_name}}</td>
          <td>{{$items->address}}</td>
          <td>{{$items->created_at->toFormattedDateString()}}</td>
          <td><a href="{{$items->id}}/{{$items->prs}}" class="btn btn-primary">View</a></td>
         </tr>
         @endforeach
         
      </tbody>
   </table>
      
  
   </tbody>
   </table>

</div>
</div>
</div>