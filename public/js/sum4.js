function sum4() {
      var uno = document.getElementById('rate').value;
      var dos = document.getElementById('absent').value;
      var ans = parseFloat(uno)*parseFloat(dos);
      if (!isNaN(ans)) {
         document.getElementById('val2').value = ans;
		}
	}