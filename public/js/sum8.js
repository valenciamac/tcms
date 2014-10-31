function sum8() {
      var aw = document.getElementById('rate').value;
      var ew = document.getElementById('regholdotpay').value;
      var ow = document.getElementById('otregholdrate').value;
      var awew = (parseFloat(aw)/8)*(parseFloat(ow)*parseFloat(ew));
      if (!isNaN(awew)) {
         document.getElementById('val6').value = awew;
      }
  }