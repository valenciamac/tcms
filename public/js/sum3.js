function sum3() {
      var uno = document.getElementById('rate').value;
      var dos = document.getElementById('regotpay').value;
      var ans = (parseFloat(uno)/8)*1.25*(parseFloat(dos));
      if (!isNaN(ans)) {
         document.getElementById('val4').value = ans;
      }
}