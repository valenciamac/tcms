
<div class="footer">
<div class="container">
      <div class="pull-right">
         Copyright

      </div>
</div>
</div>
{{HTML::script('js/jquery-1.9.1.min.js')}}
{{HTML::script('js/jquery.fastLiveFilter.js')}}
{{HTML::script('js/jquery.flot.js')}}
{{HTML::script('js/jquery.chained.min.js')}}
{{HTML::script('js/jquery.cookie.js')}}
{{HTML::script('js/jquery.maskedinput.min.js')}}
{{HTML::script('js/main.js')}}
{{HTML::script('js/jquery-ui.js')}}
{{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}
{{HTML::script('js/bootstrap-datepicker.min.js')}}
{{HTML::script('js/App.js')}}
{{HTML::script('js/Login.js')}}
{{HTML::script('js/separation.js')}}
{{HTML::script('js/checkNum.js')}}
{{HTML::script('js/numeric.js')}}
{{HTML::script('js/numeric2.js')}}
{{HTML::script('js/numeric3.js')}}
{{HTML::script('js/validate.js')}}
{{HTML::script('js/validate2.js')}}
{{HTML::script('js/add2.js')}}
{{HTML::script('js/sum2.js')}}
{{HTML::script('js/sum3.js')}}
{{HTML::script('js/sum4.js')}}
{{HTML::script('js/sum5.js')}}
{{HTML::script('js/sum6.js')}}
{{HTML::script('js/sum7.js')}}
{{HTML::script('js/sum8.js')}}
{{HTML::script('js/sum9.js')}}
{{HTML::script('js/sum10.js')}}
{{HTML::script('js/sum11.js')}}
{{HTML::script('js/invoice.js')}}
{{HTML::script('js/payroll.js')}}
{{HTML::script('js/calDate.js')}}
{{HTML::script('js/cashadv.js')}}
{{HTML::script('js/addNumbers.js')}}
{{HTML::script('js/addNumbers2.js')}}
{{HTML::script('js/chart.min.js')}}
{{HTML::script('js/jquery.slimscroll.min.js')}}
{{HTML::script('js/jquery.validate.js')}}
{{HTML::script('js/calculator.js')}}
<script>
$("#project").validate(
  {
    focusCleanup: false,
      
      wrapper: 'div',
      errorElement: 'span',
      
      highlight: function(element) {
        $(element).parents ('.form-group').removeClass ('has-success has-feedback').addClass('has-error has-feedback'); 
      },
      success: function(element) {
        $(element).parents ('.form-group').removeClass ('has-error has-feedback').addClass('has-success has-feedback');
      },
      errorPlacement: function(error, element) {
        error.appendTo(element.parents ('.controls'));
      }
  });
</script>

<script type="text/javascript">
   $(document).ready(function(){
    $(".dropdown-toggle").dropdown();
}); 

</script>
   
<script type="text/javascript">
      $(document).ready(function(){
       $(function() {   
           $('#projsearch').fastLiveFilter('#searchproj');
             });
         });
</script>   
<script type="text/javascript">
      $(document).ready(function(){
       $(function() {   
           $('#engproj').fastLiveFilter('#searchengproj');
             });
         });
</script>
<script type="text/javascript">
      $(document).ready(function(){
       $(function() {   
           $('#searchweekpo').fastLiveFilter('#weekpo');
             });
         });
</script>
<script type="text/javascript">
      $(document).ready(function(){
       
       $(function() {   
           $('#searchMrs').fastLiveFilter('#mrsproj');
             });
         }); 
</script>
   <script type="text/javascript">
      $(function(){
          $('#activities').slimScroll({
              height: '250px'
          });
      });
   </script>
   <script>
      $(function(){
       $('#po').blur(function() {
           $('input[name=po1]').attr('value',$('po1').val()+$('#po').val());
      console.log($('#po1').val());
       });
      
      });

      jQuery(function($){
       $(".number").mask("99999",{placeholder:""});
       $("#phone").mask("(999) 999-9999");
       $("#tin").mask("99-9999999");
       $("#ssn").mask("999-99-9999");
    });

      jQuery(function($){
        $('#adddesc tr:last').after('<tr>...</tr><tr>...</tr>');
    });
      
      $(function(){
       $('#controlNo').blur(function() {
           $('input[name=controlNo1]').attr('value',$('controlNo1').val()+$('#controlNo').val());
      console.log($('#controlNo1').val());
       });
      
      });


   </script>   
     
   <script>
      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      var msViewportStyle = document.createElement('style')
      msViewportStyle.appendChild(
        document.createTextNode(
          '@-ms-viewport{width:auto!important}'
        )
      )
      document.querySelector('head').appendChild(msViewportStyle)
      }
   </script>
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
<script>
$("#position").chained('#department');
</script>
<script>
  $("#ploc").chained("#pname"); /* or $("#series").chainedTo("#mark"); */
</script>

</body>
</html>