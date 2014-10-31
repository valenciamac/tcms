        <input type="text" id="searchemp" placeholder="search"> 
        @if($emp->count())
        <table class="table table-striped" style="font-size:13px;">
          <thead>
            <tr>
              <th>Id</th>
              <th>Department</th>
              <th>Position</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
            </tr>
          </thead>
          <tbody id="empee">
           
            @foreach ($emp as $emp)
            
             <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ ucwords($emp->department) }}</td>
                <td>{{ ucwords($emp->position) }}</td>
                <td>{{ ucwords($emp->fname) }}</td>
                <td>{{ ucwords($emp->mname) }}</td>
                <td>{{ ucwords($emp->lname) }}</td>
                
            </tr>
            
            @endforeach

          </tbody>
        </table>
        @else
        No employees yet
        @endif
   {{HTML::script('js/jquery-1.9.1.min.js')}}
{{HTML::script('js/jquery.fastLiveFilter.js')}}

<script type="text/javascript">
      $(document).ready(function(){
       $(function() {   
           $('#searchemp').fastLiveFilter('#empee');
             });
         });
</script>