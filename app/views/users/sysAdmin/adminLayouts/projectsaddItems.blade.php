   <!-- content here -->
    @foreach($project as $addproject)

    <label class="itemlabel">
        <p>Inventory for {{ucwords($addproject->project_name)}} located in {{ucwords($addproject->location)}}</p>
         </label>
         
         @if($standard_item->count())
         <table class="table table-bordered">
            <thead>
              <tr>
                <th>Item Name</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
            @foreach($standard_item as $sitem)
              <tr>
                <td>{{ $sitem->sname }}</td>
                @foreach($standard_desc as $gitem)
                <td>{{ $gitem->sdesc }}</td>
                @endforeach
              </tr>
            @endforeach
            
            </tbody>
          </table>
          @else
          <div class="notemp">
            <h3><label>No Items yet</label></h3>
          </div>
          
          @endif
    @endforeach