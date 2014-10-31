function separation() {
      var una = document.getElementById('add').value;
      var dos = document.getElementById('basic').value;
      var sagot = parseInt(una)*parseInt(dos)/30;
      if (!isNaN(sagot)) {
      document.getElementById('amt').value = sagot;
  }   
}
window.onload=separation();
