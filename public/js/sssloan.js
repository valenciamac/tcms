function sssloan() {
	  var uno = document.getElementById('basic').value;
      var dos = document.getElementById('ssloan').value;
       var ans = parseFloat(dos)*1;
      if (!isNaN(ans)) {
         document.getElementById('val11').value = ans;
      }
}