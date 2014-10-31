function amtless() {
      var uno = document.getElementById('amt').value;
      var dos = document.getElementById('les').value;
      var ans = parseFloat(uno)-parseFloat(dos);
      if (!isNaN(ans)) {
         document.getElementById('debit').value = ans;
      }
}