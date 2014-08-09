function sum9() {
      var uno = document.getElementById('basic').value;
      var dos = document.getElementById('days').value;
      var tres = document.getElementById('lateunder').value;
      var ans = parseFloat(uno)/(parseFloat(dos)*8)*(parseFloat(tres));
      if (!isNaN(ans)) {
         document.getElementById('val1').value = ans;
      }
}