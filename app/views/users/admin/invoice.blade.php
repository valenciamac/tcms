 <!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Invoice</title>
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
                        <li><a href="../logout">Logout</a></li>
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
               <a href="../admin"><i class="fa fa-home link"></i>Dashboard</a>
            </li>
            <li class="active">
               <a href="../adminPO"><i class="fa fa-user link"></i>Purchases</a>
            </li>
      </ul>
      <div class="divider"></div>
         <div id="datepicker">
         <div class="datepicker datepicker-inline">
         </div>
         </div>
      </aside>
      </div>
      <div class="col-md-7">
      @include('users.admin.layouts.receipts')
      </div>
      <div class="col-md-2">
      <div class="itemheader">
         <div class="headerlabel">
         
       
            <label class="headerplus">
               Receipts
            </label>
            </div>
            </div>
    @foreach($po as $ponum)
            <div class="itemcontainer">

            <button class="btn btn-primary btn-full-width" data-toggle="modal" data-target="#si">
              Add New SI
            </button>
            <button class="btn btn-primary btn-full-width" data-toggle="modal" data-target="#dr">
              Add New DR
            </button>
            <button class="btn btn-primary btn-full-width" data-toggle="modal" data-target="#so">
              Add New SO
            </button>
            <button class="btn btn-primary btn-full-width" data-toggle="modal" data-target="#ci">
              Add New CR
            </button>
            </div>
           <!-- Button trigger modal -->
            

            <!-- Modal -->
            <div class="modal fade" id="si" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input SI number</h4>
                  </div>
                  <div class="modal-body">
                    {{Form::open(array('route' => 'si.store','class'=>'form-horizontal','role'=>'form'))}}

                       <input type="text" class="form-control" name="si">
                       <input type="hidden" readonly class="form-control" name="po" value="{{$ponum->id}}">
                       <input type="hidden" readonly class="form-control" name="projid" value="{{$ponum->proj_id}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
            </div>
             <!-- Modal -->
            <div class="modal fade" id="dr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input DR number</h4>
                  </div>
                  <div class="modal-body">
                    {{Form::open(array('route' => 'dr.store','class'=>'form-horizontal','role'=>'form'))}}

                       <input type="text" class="form-control" name="dr">
                       <input type="hidden" readonly class="form-control" name="po" value="{{$ponum->id}}">
                       <input type="hidden" readonly class="form-control" name="projid" value="{{$ponum->proj_id}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
            </div>
             <!-- Modal -->
            <div class="modal fade" id="so" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input SO number</h4>
                  </div>
                  <div class="modal-body">
                    {{Form::open(array('route' => 'so.store','class'=>'form-horizontal','role'=>'form'))}}

                       <input type="text" class="form-control" name="so">
                       <input type="hidden" readonly class="form-control" name="po" value="{{$ponum->id}}">
                       <input type="hidden" readonly class="form-control" name="projid" value="{{$ponum->proj_id}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
            </div>
             <!-- Modal -->
            <div class="modal fade" id="ci" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Input SO number</h4>
                  </div>
                  <div class="modal-body">
                    {{Form::open(array('route' => 'ci.store','class'=>'form-horizontal','role'=>'form'))}}

                       <input type="text" class="form-control" name="ci">
                       <input type="hidden" readonly class="form-control" name="po" value="{{$ponum->id}}">
                       <input type="hidden" readonly class="form-control" name="projid" value="{{$ponum->proj_id}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Proceed</button>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
            </div>
@endforeach
</div>
</div>
</div>
</div>
</div>

      @include('users.includes.footer')
       