<div class="col-md-9">

               <h2>Change Philhealth Contribution Rates</h2>

                @if ($pagibig->count())

       <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Pagibig Min</th>
              <th>Pagibig Max</th>
              <th>Employee Share</th>
              
            </tr>
          </thead>
        <tbody>
        @foreach ($pagibig as $heart)
            
             <tr>
               <form action="{{$heart->id}}/update">
                 <td>{{ $heart->id }}</td>
                
              <td><input name="pagibigmin" type="text" value="{{ ($heart->pagibigmin) }}" class="form-controll"> </td>
              <td><input name="pagibigmax" type="text" value="{{ ($heart->pagibigmax) }}" class="form-controll"> </td>
              <td><input name="employeeshare" type="text" value="{{ ($heart->employeeshare) }}" class="form-controll"> </td>

            </tr>
            
            @endforeach

          </tbody>
        </table>
           
   <button type="submit" class="btn btn-primary">save</button>
   <button type="back" class="btn btn-primary">Back</button>
</form>
            @endif

  
  

            </div>
        </div>
        
    </div>
</div>
