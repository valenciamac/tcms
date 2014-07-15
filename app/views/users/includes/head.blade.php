
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/font-awesome.css')}}
	{{HTML::style('css/css.css')}}
	{{HTML::style('css/jquery-ui-1.9.2.custom.css')}}
	{{HTML::style('css/App.css')}}
	{{HTML::style('css/custom.css')}}
	{{HTML::style('css/application.css')}}
	{{HTML::style('css/dashboard.css')}}
	{{HTML::style('css/mystyle.css')}}
	{{HTML::style('css/jquery-ui.css')}}
	{{HTML::script('js/jquery-1.9.1.min.js')}}
	{{HTML::script('js/jquery.flot.js')}}
	{{HTML::script('js/jquery.cookie.js')}}
	{{HTML::script('js/angular.min.js')}}
	{{HTML::script('js/main.js')}}
	{{HTML::script('js/jquery-ui.js')}}

	
	  <script>
    $(function() {
      $( "#datepicker" ).datepicker({ minDate: -100, maxDate: "+0D" });
      $("#datepicker").datepicker("setDate",new Date());
      $( "#datepicker" ).datepicker( "option", "dateFormat", "yy/mm/dd");
    });
</script>
<script>
    $(function() {
      $( "#datepicker1" ).datepicker();
    });
</script>
<script type="text/javascript">
var set=0;
ver=parseInt(navigator.appVersion);
ie4=(ver>3  && navigator.appName!="Netscape")?1:0;
function play() 
{
 if (ie4) 
     document.all['BGSOUND_ID'].src='sound1.wav';
}
function setv()
{
 var hr2    = document.getElementById('hour2').value;
 var min2   = document.getElementById('min2').value;
 var sec2   = document.getElementById('sec2').value;
 if(hr2<10)
  hr2='0'+hr2;
 if(min2<10)
  min2='0'+min2;
 if(sec2<10)
  sec2='0'+sec2;
 document.getElementById('d2').value=hr2+'*'+min2+'*'+sec2;
 set=1;
 document.getElementById('msg').innerHTML='Alarm is ON';
}
function dis()
{
 var dat= new Date();

 var hr=dat.getHours();
 var min=dat.getMinutes();
 var sec=dat.getSeconds();
 if(hr<10)
  hr='0'+hr;
 if(min<10)
  min='0'+min;
 if(sec<10)
  sec='0'+sec;
 document.getElementById('hour').value=hr;
 document.getElementById('min').value=min;
 document.getElementById('sec').value=sec; 
 var dat2v=document.getElementById('d2').value;
 var dats =hr+'*'+min+'*'+sec;
 if(dat2v==dats && set)
 {
   play();
   alert("Hey Its time to Go!");  
   set=0;
   document.getElementById('msg').innerHTML='Alarm is OFF';
 }
 setTimeout("dis()",500);
}
function prtsel(x)
{
   for(var i=0;i<x;i++)
     document.write("<option value="+i+">"+i+"</option>");
}
</script>



</head>

			

			

	
