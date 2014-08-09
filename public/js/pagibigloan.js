function pagibigloan() {
	  var uno = document.getElementById('basic').value;
      var dos = document.getElementById('pgibigloan').value;
       var ans = parseFloat(dos)*1;
      if (!isNaN(ans)) {
         document.getElementById('val12').value = ans;
      }
}