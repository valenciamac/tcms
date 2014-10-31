function sum10() {
      var peee = document.getElementById('rate').value;
      var efff = document.getElementById('restspecial').value;
      var tee = document.getElementById('ot3').value;
      var owu = (parseFloat(peee)/8)*(parseFloat(efff)*parseFloat(tee));
      if (!isNaN(owu)) {
         document.getElementById('val9').value = owu;
      }
     }