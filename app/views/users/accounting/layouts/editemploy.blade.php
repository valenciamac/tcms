<div class="col-md-9">
   <!-- content here -->
   @if ($employee->count())
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
         </tr>
      </thead>
      <tbody>
         @foreach ($employee as $emp)
         <tr>
            <form action="{{$emp->id}}/update">
               <td>{{ $emp->id }}</td>
               <td>
                  <select name="department" class="form-control" id="department">
                     <option value="office">Office</option>
                     <option value="worksite">Work Site</option>
                  </select>
               </td>
               <td>
                  <select name="position" class="form-control" id="position">
                     <option value="accountant" class="office">Accountant</option>
                     <option value="admin" class="office">Admin</option>
                     <option value="architect" class="worksite">Architect</option>
                     <option value="carpenter" class="worksite">Carpenter</option>
                     <option value="corpsec" class="office">Corporate Secretary</option>
                     <option value="drivver" class="office work site">Driver</option>
                     <option value="electrician" class="worksite office">Electrician</option>
                     <option value="engineer" class="worksite">Engineer</option>
                     <option value="foreman" class="worksite">Foreman</option>
                     <option value="stockman" class="worksite">Gen. Stockman</option>
                     <option value="laborer" class="worksite">Laborer</option>
                     <option value="maintenance" class="worksite office">Maintenance</option>
                     <option value="mason" class="worksite">Mason</option>
                     <option value="plumber" class="worksite office">Plumber</option>
                     <option value="president" class="office">President</option>
                     <option value="programmer" class="office">Programmer</option>
                     <option value="proincha" class="office worksite">Project in-charge</option>
                     <option value="purchase" class="office">Purchaser</option>
                     <option value="site" class="worksite">Site</option>
                     <option value="steelman" class="worksite">Steelman</option>
                     <option value="settler" class="worksite">Tile Settler</option>
                     <option value="vicepres" class="office"> Vice President</option>
                     <option value="warehouse" class="worksite">Warehouseman</option>
                     <option value="welder" class="worksite">Welder</option>
                  </select>
               </td>
               <td><input name="fname" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder=""  required value="{{ ($emp->fname) }}" class="form-controll"> </td>
               <td><input name="mname" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required value="{{ ($emp->mname) }}" class="form-controll"> </td>
               <td><input name="lname" type="text" onkeypress="return checkNum();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,20);" maxlength="20" placeholder="" required value="{{ ($emp->lname) }}" class="form-controll"> </td>
               <td><input name="rate" onkeypress="return numeric();" onkeypress="limitText(this.form.limitedtextfield,this.form.countdown,6);" maxlength="6" placeholder="" required type="text" value="{{ ($emp->rate) }}" class="form-controll"> </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <div class="form-inline">
   <button type="submit" id="login-btn" class="btn btn-primary btn-block" style="width:20%;">Save &nbsp; <i class="fa fa-save"></i></button>
   </div>
   <div class="form-inline">
   <p></p>
   </div>
   <div class="form-inline">
   <button type="back" id="login-btn" class="btn btn-primary btn-block" style="width:20%;">Back &nbsp; <i class="fa fa-refresh"></i></button>
   </div>
   </form>  
   @endif
</div>
</div>
</div>
</div>