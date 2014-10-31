function sum5() {
      var una = document.getElementById('rate').value;
      var dalawa = document.getElementById('regholdpay').value;
      var three = document.getElementById('otregholdrate').value;
      var sagot = (parseFloat(una)/8)*(parseFloat(three)*parseFloat(dalawa));
      if (!isNaN(sagot)) {
         document.getElementById('val5').value = sagot;
      }
}



 