function sum2() {
      var uno = document.getElementById('rate').value;
      var dos = document.getElementById('days').value;
      var ans = parseInt(dos)*(parseInt(uno));
      if (!isNaN(ans)) {
         document.getElementById('basic').value = ans;
      }
}

