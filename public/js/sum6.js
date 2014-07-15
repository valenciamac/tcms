function sum6() {
      var aw = document.getElementById('rate').value;
      var ew = document.getElementById('restpay').value;
      var awew = (parseFloat(aw))/8*1.3*(parseFloat(ew));
      if (!isNaN(awew)) {
         document.getElementById('val6').value = awew;
      }
  }