	{{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
	{{HTML::script('js/App.js')}}
	{{HTML::script('js/Login.js')}}
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

<a id="back-to-top" href="#" style="display: none;"><i class="fa fa-chevron-up"></i></a>
</div>
<footer>
<div class="container">
	<div class="pull-right">
		copyright
	</div>
	
</div>
</footer>
</body>
</html>