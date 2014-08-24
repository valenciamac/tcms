function sum7() {
      var ow = document.getElementById('rate').value;
      var uw = document.getElementById('specholdpay').value;
      var owuw = (parseFloat(ow))/8*1.3*(parseFloat(uw));
      if (!isNaN(owuw)) {
         document.getElementById('val8').value = owuw;
      }
     }