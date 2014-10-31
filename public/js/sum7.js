function sum7() {
      var ow = document.getElementById('rate').value;
      var uw = document.getElementById('specholdpay').value;
      var see = document.getElementById('ot2').value;
      var owuw = (parseFloat(ow)/8)*(parseFloat(see)*parseFloat(uw));
      if (!isNaN(owuw)) {
         document.getElementById('val8').value = owuw;
      }
     }