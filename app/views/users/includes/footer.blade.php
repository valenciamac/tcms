	{{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/App.js')}}
	{{HTML::script('js/Login.js')}}
	{{HTML::script('js/checkNum.js')}}
	{{HTML::script('js/numeric.js')}}
	{{HTML::script('js/numeric2.js')}}
	{{HTML::script('js/validate.js')}}
	{{HTML::script('js/add2.js')}}
	{{HTML::script('js/fullcalendar.min.js')}}
	{{HTML::script('css/bootstrap-datepicker-0.1.11/js/bootstrap-datepicker.js')}}
	{{HTML::script('js/jquery-1.10.1.min.js')}}
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
		   $('.datepicker').datepicker({
		   		
		    });
		});	
    </script>
      <script type="text/javascript">
		$(function	()	{
		
			// Full calendar
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
					
			var calendar = $('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: ''
				},
				selectable: true,
				selectHelper: true,
				select: function(start, end, allDay) {
					var title = prompt('Event Title:');
					if (title) {
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay	
							},
							true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},
				editable: true
			});
		});
	</script>
<SCRIPT language="javascript">
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