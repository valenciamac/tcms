   function invoice() {
      var uno = document.getElementById('qty').value;
      var dos = document.getElementById('del').value;
      var ans = parseFloat(uno)-parseFloat(dos);
      if (!isNaN(ans)) {
         document.getElementById('qty').value = ans;
      }
}