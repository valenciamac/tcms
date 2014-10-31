function sum11() {
      var ow = document.getElementById('rate').value;
      var uw = document.getElementById('restreg').value;
      var see = document.getElementById('ot5').value;
      var owuw = (parseFloat(ow)/8)*(parseFloat(see)*parseFloat(uw));
      if (!isNaN(owuw)) {
         document.getElementById('val10').value = owuw;
      }
     }