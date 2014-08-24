function pagibig() {
    var trestres = document.getElementById('basic').value;
     var tres = parseFloat(trestres)

     if(tres<1500)
     {
     	ans=parseFloat(trestres)*.01
     	document.getElementById('pgibigcont').value = ans;
     }
      if(tres>1500)
     {
     	ans=parseFloat(trestres)*.02
     	document.getElementById('pgibigcont').value = ans;
     }
    }
      window.onload=pagibig();
 			