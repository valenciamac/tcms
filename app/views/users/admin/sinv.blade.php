 <!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Si</title>
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
   
@foreach($po as $ponum)
   @foreach($si as $sis)

   <h4>PO Number:&nbsp;{{$ponum->id}}</h4>
   <h4>SI Number:&nbsp;{{$sis->num}}</h4>
      <table class="table table-bordered content" style="font-size:13px;" id="res">
         <thead>
            <tr>
               <th>Items</th>
               <th>Description</th>
               <th>Quantity</th>
               <th>Delivered</th>
               <th>Save</th>
            </tr>
         </thead>
         <tbody>
         @foreach($item as $purchase)
            
            <form action="{{$sis->num}}/{{$purchase->id}}" role="form" method="get">
            <tr>
               <td><input type="hidden" name="iname" value="{{$purchase->iname}}" readonly>{{$purchase->iname}}</td>
               <td><input type="hidden" name="idesc" value="{{$purchase->desc}}" readonly>{{$purchase->desc}}</td>
               <td>
                  <input type="hidden" class="noborder" id="qty{{$purchase->id}}" value="{{$purchase->edit_this}}" readonly>
                  <input type="text" value="{{$purchase->edit_this}}" class="noborder" id="ans{{$purchase->id}}">
               </td>
               <td>
               <input type="number" onclick="invoice{{$purchase->id}}()" id="del{{$purchase->id}}" step="1" min="0" max="{{$purchase->edit_this}}"
               onkeyup="invoice{{$purchase->id}}()" onkeypress="return isNumberKey(event)"
                class="full-width addinvoice" name="delivered" placeholder="0">
              <input type="hidden" value="$purchase->id" name="id">
               </td>
               <td>
                  <button type="submit" class="btn btn-primary addinvoice btn-full-width">Update</button>
               </td>
            <input type="hidden" value="{{$sis->num}}" name="invnum" readonly>
            <input type="hidden" value="{{$purchase->price}}" name="iprice" readonly>
            <input type="hidden" value="{{$purchase->id}}" name="iid" readonly>
            <input type="hidden" value="{{$ponum->proj_id}}" name="projid" readonly>
            <input type="hidden" value="{{$ponum->po}}" name="po" readonly>
            
            <script type="text/javascript">
                 function invoice{{$purchase->id}}() {
                  var uno = document.getElementById('qty{{$purchase->id}}').value;
                  var dos = document.getElementById('del{{$purchase->id}}').value;
                  var ans = parseFloat(uno)-parseFloat(dos);
                  if (!isNaN(ans)) {
                     document.getElementById('ans{{$purchase->id}}').value = ans;         
                     }
                  }

                  function isNumberKey(evt){
                      var charCode = (evt.which) ? evt.which : event.keyCode
                      if (charCode > 31 && (charCode < 48 || charCode > 57))
                          return false;
                      return true;
                  }
            </script>
            </form>
            </tr>
         @endforeach
         </tbody>
      </table>
      
    
    @endforeach
    @endforeach
</div>


</div>
</div>
</div>
</div>

      @include('users.includes.footer')
       