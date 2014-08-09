<div class="col-md-9">

               <h2>Change SSS Contribution Rates</h2>

                @if ($ssscontr->count())

       <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Range</th>
              <th>Credit</th>
              <th>SSS Employer Share</th>
              <th>SSS Employee Share</th>
              <th>SS Total</th>
              <th>EC Employer Share</th>
              <th>TC Employer Share</th>
              <th>TC Employee Share</th>
              <th>TC Total</th>
              <th>TC Contribution</th>
              
            </tr>
          </thead>
          <tbody>
        @foreach ($ssscontr as $ssscont)
            
             <tr>
               <form action="{{$ssscont->id}}/update">
                 <td>{{ $ssscont->id }}</td>
                
              <td><input name="range" type="text" value="{{ ($ssscont->range) }}" class="form-controll"> </td>
              <td><input name="credit" type="text" value="{{ ($ssscont->credit) }}" class="form-controll"> </td>
              <td><input name="ssempershare" type="text"  value="{{ ($ssscont->ssempershare) }}" class="form-controll"> </td>
              <td><input name="ssempeeshare"  value="{{ ($ssscont->ssempeeshare) }}" class="form-controll"> </td>
              <td><input name="sstotal" type="text" value="{{ ($ssscont->sstotal) }}" class="form-controll"> </td>
              <td><input name="ecempershare" type="text" value="{{ ($ssscont->ecempershare) }}" class="form-controll"> </td>
              <td><input name="tcempershare" type="text" value="{{ ($ssscont->tcempershare) }}" class="form-controll"> </td>
              <td><input name="tcempeeshare" type="text" value="{{ ($ssscont->tcempeeshare) }}" class="form-controll"> </td>
              <td><input name="tctotal" type="text" value="{{ ($ssscont->tctotal) }}" class="form-controll"> </td>
              <td><input name="totalcontr" type="text" value="{{ ($ssscont->totalcontr) }}" class="form-controll"> </td>
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
