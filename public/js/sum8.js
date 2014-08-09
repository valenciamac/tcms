function sum8() {
      var aw = document.getElementById('rate').value;
      var ew = document.getElementById('regholdotpay').value;
      var awew = (parseFloat(aw)/8)*1.3*(1.2*parseFloat(ew));
      if (!isNaN(awew)) {
         document.getElementById('val5').value = awew;
      }
  }