	{{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/App.js')}}
	{{HTML::script('js/Login.js')}}
	{{HTML::script('js/checkNum.js')}}
	{{HTML::script('js/numeric.js')}}
	{{HTML::script('js/numeric2.js')}}
    {{HTML::script('js/numeric3.js')}}
	{{HTML::script('js/validate.js')}}
	{{HTML::script('js/add2.js')}}
	{{HTML::script('js/sum2.js')}}
    {{HTML::script('js/sum3.js')}}
    {{HTML::script('js/sum4.js')}}
    {{HTML::script('js/sum5.js')}}
    {{HTML::script('js/sum6.js')}}
    {{HTML::script('js/sum7.js')}}
    {{HTML::script('js/sum8.js')}}
    {{HTML::script('js/sum9.js')}}
    {{HTML::script('js/addNumbers.js')}}
    {{HTML::script('js/chart.min.js')}}
    {{HTML::script('js/jquery.slimscroll.min.js')}}
	<!--{{HTML::script('js/skin.js')}}-->

	<script type="text/javascript">
		$('.dropdown-toggle').dropdown()
	</script>

	<script type="text/javascript">
	var options = {
    series: {
        lines: { show: true },
        points: { show: true }
    	}
	};
	$.plot($("#placeholder"), [ [[0, 0], [1, 1]] ], { yaxis: { max: 1 } });
	</script>

	<script type="text/javascript">

	</script>

<a id="back-to-top" href="#" style="display: none;"><i class="fa fa-chevron-up"></i></a>
</div>
<footer>
<div class="container">
	<div class="pull-right">
		copyright
	</div>
	
</div>
<script type="text/javascript">
	$(function(){
	    $('#activities').slimScroll({
	        height: '250px'
	    });
});
</script>
<script type="text/javascript">
        function addRow(tableID) {
 
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            var colCount = table.rows[0].cells.length;
 
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);
 
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            break;
                }
            }
        }
 
        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
            }catch(e) {
                alert(e);
            }
        }
 
    </SCRIPT>
	   <script>
       $(function(){
        $('#po').blur(function() {
            $('input[name=po1]').attr('value',$('po1').val()+$('#po').val());
    console.log($('#po1').val());
        });

    });
    </script>	
    <script>
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

</footer>
</body>
</html>