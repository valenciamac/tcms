function cashadv() {
	  var uno = document.getElementById('basic').value;
      var dos = document.getElementById('advance').value;
      var ans = parseFloat(dos)*1;
      if (!isNaN(ans)) {
         document.getElementById('val13').value = ans;
      }
}