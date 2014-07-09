function add2() {
      var una = document.getElementById('text1').value;
      var dalawa = document.getElementById('text2').value;
      var sagot = parseInt(una)*parseInt(dalawa);
      if (!isNaN(sagot)) {
      document.getElementById('text3').value = sagot;
  }
     
}