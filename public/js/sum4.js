function sum4() {
      var uno = document.getElementById('rate').value;
      var dos = document.getElementById('absent').value;
      var tres = document.getElementById('basic').value;
      var ans = parseFloat(tres)-(parseFloat(uno)*parseFloat(dos));
      if (!isNaN(ans)) {
         document.getElementById('val2').value = ans;
		}
	}