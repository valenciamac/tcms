<table class="table table-stripped" style="font-size:13px;">
          <thead>
            <tr>
            <th>Project Name</th>
            <th>Location</th>
            <th>Option</th>
            </tr>
            </thead>
            <tbody>
            @foreach($project as $proprs)
            <tr>
            <td>{{$proprs->project_name}}</td>
            <td>{{$proprs->location}}</td>
            <td><a href="projprs/{{$proprs->id}}" class="btn btn-primary">View Model </a></td>
            </tr>
            @endforeach
            </tbody>
            </table>