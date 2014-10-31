function sum3() {
      var uno = document.getElementById('rate').value;
      var dos = document.getElementById('regotpay').value;
      var thresh = document.getElementById('otpayrate').value;
      var ans = (parseFloat(uno)/8)*(parseFloat(thresh)*parseFloat(dos));
      if (!isNaN(ans)) {
         document.getElementById('val4').value = ans;
      }
}