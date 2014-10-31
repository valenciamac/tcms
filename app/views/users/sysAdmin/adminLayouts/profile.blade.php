
<div class="col-md-9">
   <!-- content here -->
   @if ($users->count())
   <table class="table table-striped" style="font-size:13px;">
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
         <tr class="contents">
            <form action="{{$user->id}}/update">
               <td class="full">{{ $user->id }}</td>
               <td class="full"><input name="fname" type="text" value="{{ ($user->fname) }}" class="form-control"> </td>
               <td class="full"><input name="lname" type="text" value="{{ ($user->lname) }}" class="form-control"> </td>
               <td class="full"><input name="username" type="text" value="{{ ($user->username) }}" class="form-control"> </td>
               <td class="full">
                  <select name="role" class="form-control" id="role">
                     <option id="sysAdmin" value="sysAdmin" >System Administrator</option>
                     <option id="accounting" value="accounting">Accounting</option>
                     <option id="admin" value="admin">Administrator</option>
                     <option id="financing" value="financing">Financing</option>
                     <option id="purchasing" value="purchasing">Purchasing</option>
                  </select>

                  
               </td>
         </tr>
         @endforeach
      </tbody>
   </table>
   <button type="submit" class="btn btn-primary pull-right">save</button>
   </form>  
   @else
   <h1>No results</h1>
   @endif

   <script type="text/javascript">
                           $( "#{{$user->role}}" ).attr( "selected","selected" );
                           </script>
</div>
</div>
</div>
</div>