function wtax() {
      var uno = document.getElementById('val14').value;
      var dos = document.getElementById('status').value;
      var tres = document.getElementById('dependent').value;
      var ans = parseFloat(uno)- 
      if (!isNaN(ans)) {
         document.getElementById('val1').value = ans;
      }
}