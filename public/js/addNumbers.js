 function addNumbers()
                {
                        var unos = document.getElementById('basic').value;
                        var aaa = document.getElementById('val4').value;
                        var bbb = document.getElementById('val5').value;
                        var ccc = document.getElementById('val6').value;
                        var ddd = document.getElementById('val7').value;
                        var eee = document.getElementById('val8').value;
                        var ans = parseFloat(unos)+parseFloat(aaa)+parseFloat(bbb)+parseFloat(ccc)+parseFloat(ddd)+parseFloat(eee);
                                document.getElementById('gross').value=ans;
                }