function addNumbers2(){
						var gross = parseFloat(document.getElementById("gross").value);
                     	var val1 = parseFloat(document.getElementById("val1").value);
                        var val2 = parseFloat(document.getElementById("val2").value);
                        var val3 = parseFloat(document.getElementById("val3").value);
                        var phcont = parseFloat(document.getElementById("phcont").value);
                        var pgibigcont = parseFloat(document.getElementById("pgibigcont").value);
                        var ssscont = parseFloat(document.getElementById("ssscont").value);
                        var ansD = document.getElementById("net");
                        ansD.value =  gross - (val1 + val2 + val3 + phcont + pgibigcont + ssscont);


}