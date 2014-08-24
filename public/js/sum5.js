function sum5() {
      var una = document.getElementById('rate').value;
      var dalawa = document.getElementById('regholdpay').value;
      var sagot = (parseFloat(una))/8*1.3*(parseFloat(dalawa));
      if (!isNaN(sagot)) {
         document.getElementById('val5').value = sagot;
      }
}



 