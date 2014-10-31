function sum6() {
      var aw = document.getElementById('rate').value;
      var ew = document.getElementById('restpay').value;
      var su = document.getElementById('ot2').value;
      var awew = (parseFloat(aw)/8)*(parseFloat(su)*parseFloat(ew));
      if (!isNaN(awew)) {
         document.getElementById('val7').value = awew;
      }
  }