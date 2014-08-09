<div class="col-md-9">

               <h2>Change Overtime Rates</h2>

                @if ($rate->count())

      <table class="table table-bordered table-hover" style="font-size:13px;">
          <thead>
            <tr>
              <th>Id</th>
              <th>OT Rate</th>
              <th>OT Rate(Rest/Special)</th>
              <th>OT Rate(Special)</th>
              <th>OT Rate(Regular)</th>
              <th>OT Rate(Rest/Regular)</th> 
            </tr>
          </thead>
          <tbody>
        @foreach ($rate as $rat)
        
            
             <tr>
             <form action="{{$rat->id}}/update">
                <td>{{ $rat->id }}</td>
              <td><input name="otpayrate" type="text" value="{{ ($rat->otpayrate) }}" class="form-controll"> </td>
              <td><input name="otrestnspecholdrate" type="text"  value="{{ ($rat->otrestnspecholdrate) }}" class="form-controll"> </td>
              <td><input name="otrestspecholdrate" type="text"  value="{{ ($rat->otrestspecholdrate) }}" class="form-controll"> </td>
              <td><input name="otregholdrate" type="text" value="{{ ($rat->otregholdrate) }}" class="form-controll"> </td>
              <td><input name="otrestonreghold" type="text" value="{{ ($rat->otrestonreghold) }}" class="form-controll"> </td>
     

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
