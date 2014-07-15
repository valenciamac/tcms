 function addNumbers()
                {
                        var val1 = parseInt(document.getElementById("val1").value);
                        var val2 = parseInt(document.getElementById("val2").value);
                        var val3 = parseInt(document.getElementById("val3").value);
                        var val4 = parseInt(document.getElementById("val4").value);
                        var val5 = parseInt(document.getElementById("val5").value);
                        var val6 = parseInt(document.getElementById("val6").value);
                        var val7 = parseInt(document.getElementById("val7").value);
                        var ansD = document.getElementById("net");
                        ansD.value =  val1 + val2 - val3 + val4 + val5 + val6 + val7;
                }