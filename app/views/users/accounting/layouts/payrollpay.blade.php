<div class="col-md-9">

<h2>Payroll</h2>

<form class="form-inline" action="payroll" role="form">
    <div class="form-group" >
        <div class="input-inline">
          
          	<input class="form-control pull-right" type="text" placeholder="Search" name="search">
        
        </div>
      </div>
</form>
    @if ($employee->count())

            @foreach ($employee as $emp1)
{{Form::open(array('route' => 'employee.store','class'=>'form-horizontal','role'=>'form'))}}
        

			<div class="form-group">
				<label for="dept" class="col-sm-3 control-label" value = "{{$emp1->id}}">ID No:&nbsp;</label>
			</div>
			
			<div class="form-group">
				<label for="dept" class="col-sm-3 control-label" >Department:&nbsp;</label>
				<div class="col-xs-1">
              
			</div>

			<div class="form-group">
				<label for="dept" class="col-sm-3 control-label">Position:&nbsp;</label>
			</div>

			<div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >First Name:&nbsp;</label>
            </div>

            <div class="form-group">
                <label for="fname" class="col-sm-3 control-label" >Middle Name:&nbsp;</label>
            </div>

            <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Last Name:&nbsp;</label>
            </div>


            <div class="form-group">
                <label for="lname" class="col-sm-3 control-label">Rate:&nbsp;</label>
            </div>
		
			<div class="form-group">

                <button type="submit" id="login-btn"  class="btn btn-primary btn-block pull-right" style="width:45%;">Compute &nbsp; <i class="fa fa-plus"></i></button>

            </div>
            @endforeach
            
        {{Form::close()}}
</div>
</div>
</div>
</div>
