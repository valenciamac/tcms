   <!-- content here -->
      <div class="span7">
            
            
            <h3>Employee</h3>
            <div class="panel-group" id="accordion">
              <!-- buttons view add -->

            <div ><input type="text" id="projsearch" class="hanap" placeholder="search">
            <div class="pull-right">
              <a class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#addemp">
                Add New Employee
              </a>
              </div>
              <!-- buttons --></div>
          <div id="addemp" class="panel-collapse collapse">
            <div class="panel-body">
            <hr>
                {{Form::open(array('route' => 'employee.store','class'=>'form-horizontal','role'=>'form'))}}
                    
        {{Form::close()}}
		
			</div>
		</div>
		
	</div>
</div>