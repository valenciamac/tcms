<div class="col-md-9">
   <!-- content here -->
   @if ($users->count())
   <table class="table table-bordered table-hover" style="font-size:13px;">
      <thead>
         <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Role</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($users as $user)
         <tr>
            <form action="{{$user->id}}/update">
               <td>{{ $user->id }}</td>
               <td><input name="fname" type="text" value="{{ ($user->fname) }}" class="form-controll"> </td>
               <td><input name="lname" type="text" value="{{ ($user->lname) }}" class="form-controll"> </td>
               <td><input name="username" type="text" value="{{ ($user->username) }}" class="form-controll"> </td>
               <td>
                  <select name="role" class="form-control" id="role">
                     <option value="sysAdmin" >System Administrator</option>
                     <option value="accounting">Accounting</option>
                     <option value="admin">Administrator</option>
                     <option value="financing">Financing</option>
                     <option value="purchasing">Purchasing</option>
                  </select>
               </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <button type="submit">save</button>
   </form>  
   @else
   <h1>No results</h1>
   @endif
</div>
</div>
</div>
</div>