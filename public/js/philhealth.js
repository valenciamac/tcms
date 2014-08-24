function philhealth() {
	  var unouno = document.getElementById('basic').value;
	  var uno = parseFloat(unouno)
	  	if(uno <= 8999 && uno >=0)
	  	{
	  		ans=100;
	  		document.getElementById('phcont').value = ans;
	  	}
    	 if(uno>=9000 && uno <=9999){
 		ans=112.50;
		document.getElementById('phcont').value = ans;
			}	
		 if(uno>=10000 && uno <=10999){
 		ans=125.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=11000 && uno <=11999){
 		ans=137.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=12000 && uno <=12999 ){
 		ans=150.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=13000 && uno <=13999){
 		ans=162.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=14000 && uno <=14999){
 		ans=175.00;
		document.getElementById('phcont').value = ans;
			}
	
		 if(uno>=15000.00 && uno<=15999.99){
 		ans=187.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=16000.00 && uno<=16999.99){
 		ans=200.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=17000.00 && uno<=17999.99){
 		ans=212.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=18000.00 && uno<=18999.99){
 		ans=225.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=19000.00 && uno<=19999.99){
 		ans=237.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=20000.00 && uno<=20999.99){
 		ans=250.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=21000.00&& uno<=21999.99){
 		ans=262.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=22000.00 && uno<=22999.99){
 		ans=275.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=23000.00 && uno<=23999.99){
 		ans=287.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=24000.00 && uno<=24999.99){
 		ans=300.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=25000.00 && uno<=25999.99){
 		ans=312.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=26000.00 && uno<=26999.99){
 		ans=325.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=27000.00 && uno<=27999.99){
 		ans=337.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=28000.00 && uno<=28999.99){
 		ans=350.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=29000.00 && uno<=29999.99){
 		ans=362.50;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=30000 && uno<=30999){
 		ans=375.00;
		document.getElementById('phcont').value = ans;
			}
		 if(uno>=31000 && uno<=31999){
 		ans=387.00;
		document.getElementById('phcont').value = ans;
			}
			 if(uno>=32000 && uno<=32999){
 		ans=400.00;
		document.getElementById('phcont').value = ans;
			}
			 if(uno>=33000 && uno<=33999){
 		ans=412.50;
		document.getElementById('phcont').value = ans;
			}
			 if(uno>=34000 && uno<=34999){
 		ans=425.00;
		document.getElementById('phcont').value = ans;
			}
			 if(uno>=35000){
 		ans=437.50;
		document.getElementById('phcont').value = ans;
			}

			
    }
    	window.onload=philhealth();
