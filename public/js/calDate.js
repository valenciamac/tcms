function calDate()
{
	var val1 = document.getElementById('days').value;
	var cool = new Date(document.getElementById('paydate').value);
	var year = cool.getFullYear();
	var month = cool.getMonth();
	var day = cool.getDate();

	// var month = cool.getMonth()+1;
	// if(month<10)
	// {
	// 	month = '0'+month;
	// }
	
	if(day>=0 && day<=31)
	{	
	var day = cool.getDate() + parseInt(val1);
	var month = cool.getMonth()+1;
	if(month<10)
	{
		month = '0'+month;
	}
	
	}

	if(day >=32)
	{
		if (month >=1 && month <2)
		{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1)-1;
	} 
	else if(month>=2 && month <3)
	{
		var month =cool.getMonth()+2;
		if(year % 4 == 0)
		{
		var day = cool.getDate()-parseInt(val1)+1;
		}
		else
		{
			var day=cool.getDate()-parseInt(val1)+2;
		}
	}
	else if(month>=3 && month <4)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1)-1;
	}
	else if(month>=4 && month<5)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1);
	}
	else if(month>=5 && month<6)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1)-1;
	}

	else if(month>=6 && month<7)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1);
	}
	else if(month>=7 && month<8)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1)-1;
	}
	else if(month>=8 && month<9)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1)-1;
	}
	else if(month>=9 && month<10)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1);
	}
	else if(month>=10 && month<11)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1)-1;
	}
	else if(month>=11 && month<12)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1);
	}
	else if(month>=12 && month<13)
	{
		var month = cool.getMonth()+2;
		var day = cool.getDate()-parseInt(val1)-1;
	}
		if(day <10)
		{
			day = '0'+day;
		}
		if(month<10)
	{
		month = '0'+month;
	}
	}




	if(month >12)
	{
		var year = cool.getFullYear()+1;
		var month = cool.getMonth()-10;
			if(month<10)
	{
		month = '0'+month;
	}
	}

	document.getElementById('paydateend').value = year + "-" + month + "-" + day;
	
}
 window.onload=calDate();