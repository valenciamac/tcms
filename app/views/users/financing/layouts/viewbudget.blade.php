
   {{Form::open(array('route' => 'budget.store','class'=>'form-horizontal','role'=>'form'))}}
     
     
  
 

    <h3> Add budget per project</h3>  
    <div class="row">
    <div class="col-sm-4">
          
             <div class="form-group">
                <label for="fname" class="col-md-6 control-label" >Budget :</label>
                <div class="col-md-6">
                <input name="addincome" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,8);" maxlength="8" placeholder="" required type="text" class="form-control" >
            </div>
            </div>
            @if($project->count())
            @foreach($project as $cool)
            <div class="col-sm-4">
                <input name="projId" type="hidden" class="form-control input-sm" value="{{$cool->id}}">
             </div>
             @endforeach
             @endif
           
            
            </div>
            <div class="pull-left" style="padding-top:20px;">
            <input type="submit" class="btn btn-primary " value="Save">
            </div>

     {{Form::close()}}
         
                {{Form::close()}}
              </div>
            </div>
          </div>
   
     
    