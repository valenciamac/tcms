function sum2() {
      var uno = document.getElementById('rate').value;
      var dos = document.getElementById('days').value;
      var ans = parseFloat(dos)*(parseFloat(uno));
      if (!isNaN(ans)) {
         document.getElementById('basic').value = ans;
      }
}

