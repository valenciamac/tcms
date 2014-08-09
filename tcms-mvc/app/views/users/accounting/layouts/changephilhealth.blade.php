<div class="col-md-9">

               <h2>Change Philhealth Contribution Rates</h2>

                @if ($phcontr->count())

       <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Salary Bracket</th>
              <th>Salary Range</th>
              <th>Salary Base</th>
              <th>Total Monthly Premium</th>
              <th>Employer Share</th>
              <th>Employee Share</th>
              
            </tr>
          </thead>
        <tbody>
        @foreach ($phcontr as $phealth)
            
             <tr>
               <form action="{{$phealth->id}}/update">
                 <td>{{ $phealth->id }}</td>
                
              <td><input name="salbracket" type="text" value="{{ ($phealth->salbracket) }}" class="form-controll"> </td>
              <td><input name="salrange" type="text" value="{{ ($phealth->salrange) }}" class="form-controll"> </td>
              <td><input name="salbase" type="text"  value="{{ ($phealth->salbase) }}" class="form-controll"> </td>
              <td><input name="tmp"  value="{{ ($phealth->tmp) }}" class="form-controll"> </td>
              <td><input name="empeeshare" type="text" value="{{ ($phealth->empeeshare) }}" class="form-controll"> </td>
              <td><input name="empershare" type="text" value="{{ ($phealth->empershare) }}" class="form-controll"> </td>

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
