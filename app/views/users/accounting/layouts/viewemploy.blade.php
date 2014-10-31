
        <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>Id</th>
              <th>Department</th>
              <th>Position</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Rate</th>
              <th>Basic</th>
              <th>Days</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody id="employee">
           
            @foreach ($employee as $emp)
            
             <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ ucwords($emp->department) }}</td>
                <td>{{ ucwords($emp->position) }}</td>
                <td>{{ ucwords($emp->fname) }}</td>
                <td>{{ ucwords($emp->mname) }}</td>
                <td>{{ ucwords($emp->lname) }}</td>
                <td>{{ $emp->rate }}</td>
                <td>{{ $emp->basic }}</td>
                <td>{{ $emp->days }}</td>
                <td><a href="emp/{{$emp->id}}"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="emp/{{$emp->id}}/delete"><i class="fa fa-trash-o"></i></a></td>

            </tr>
            
            @endforeach

          </tbody>
        </table>

   

      