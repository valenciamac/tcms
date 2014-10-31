 <!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>MRS Inventory</title>
      @include('users.includes.head')
   <body>
      <div id="wrapper">
      <div id="topbar">
         <div class="container">
            <a href="javascript:;" id="menu-trigger" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
            <i class="icon-cog"></i>
            </a>
            <div id="top-nav">
               <ul class="pull-right">
                  <li class="dropdown">
                     <a href="admin"><i class="fa fa-home" style="padding-right:5px;"></i> Home</a>
                  </li>
                  <li class="dropdown">
                     <a href="javascript:;" class="dropdown-toggle hover" data-toggle="dropdown">
                     <i class="fa fa-user" style="padding-right:5px;" ></i> {{ ucwords(Auth::user()->fname), '&nbsp;', ucwords(Auth::user()->lname) }}                       
                     <b class="caret hover"></b>
                     </a>
                     <ul class="dropdown-menu pull-right">
                        <li><a href="../../logout">Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /#top-nav -->
         </div>
         <!-- /.container -->
      </div>
      <div id="header">
      <div class="container">
      <a href="admin"><img src="{{asset('img/brand1.png')}}" class="logo"></a>
      </div>
      </div>
      <div class="container mainB">
      <div class="row">
      <div class="col-md-3">
         <aside class="right">
      <div class="divider"></div>
      <ul class="intended sideMenu">
         
            <li>
               <a href="../../admin"><i class="fa fa-home link"></i>Dashboard</a>
            </li>
            <li class="active">
               <a href="../../adminPO"><i class="fa fa-user link"></i>Purchases</a>
            </li>
      </ul>
      <div class="divider"></div>
         <div id="datepicker">
         <div class="datepicker datepicker-inline">
         </div>
         </div>
      </aside>
      </div>
      
     <div class="col-md-9">
   
@foreach($project as $proj )
   @foreach($mrs as $mrs)

   <h4>Project Name:&nbsp;{{$proj->project_name}}</h4>
   <h4>MRS Number:&nbsp;{{$mrs->id}}</h4>
   <h4>Unit:&nbsp;{{$mrs->unit}}</h4>
      <table class="table table-bordered content" style="font-size:13px;" id="res">
         <thead>
            <tr>
               <th>Items</th>
               <th>Description</th>
               <th>Quantity</th>
               <th>Delivered</th>
            </tr>
         </thead>
         <tbody>
         <?php 
               $count = 0;
            ?>
         @foreach($proj->invitem as $inv)
            <form action="{{$mrs->id}}/{{$inv->id}}" role="form" method="get">
            <tr>
               <td>
               <input type="hidden" name="invname[]" value="{{$inv->invName}}" readonly>
               <input type="hidden" name="unit[]" value="{{$mrs->unit}}" readonly>
               <input type="hidden" name="projname[]" value="{{$proj->project_name}}" readonly>
               <input type="hidden" name="invid[]" value="{{$inv->id}}" readonly>{{$inv->invName}}</td>
               <td><input type="hidden" name="idesc[]" value="{{$inv->idesc}}" readonly>{{$inv->idesc}}</td>
               <td>
                  <input type="hidden" class="noborder" id="qty{{$inv->id}}" value="{{$inv->qty}}" readonly>
                  <input type="text" value="{{$inv->qty}}" class="noborder" id="ans{{$inv->id}}">
               </td>
               <td>
               <input type="number" required onclick="invoice{{$inv->id}}()" id="del{{$inv->id}}" step="1" min="0" max="{{$inv->qty}}"
               onkeyup="invoice{{$inv->id}}()" onkeypress="return isNumberKey(event)"
                class="full-width addinvoice" name="delivered[]" placeholder="0">
              <input type="hidden" value="{{$mrs->id}}" name="mrsno[]" readonly>
               </td>
            
            <script type="text/javascript">
                 function invoice{{$inv->id}}() {
                  var uno = document.getElementById('qty{{$inv->id}}').value;
                  var dos = document.getElementById('del{{$inv->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$inv->id}}').value = ans;         
                     }
                  }

                  function isNumberKey(evt){
                      var charCode = (evt.which) ? evt.which : event.keyCode
                      if (charCode > 31 && (charCode < 48 || charCode > 57))
                          return false;
                      return true;
                  }
            </script>
            
            </tr>
            <?php
            $count++;  
         ?>
         @endforeach

         <input type="hidden" name="çount" value="{{$count}}" readonly>
         </tbody>
      </table>
      <button type="submit" class="btn btn-primary addinvoice pull-right">Update</button>
    </form>
    @endforeach
    @endforeach
</div>


</div>
</div>
</div>
</div>

      @include('users.includes.footer')
       