function validate2()
{
 
if ((event.keyCode > 64 && event.keyCode < 91) || (event.keyCode > 96 && event.keyCode < 123) ||
    (event.keyCode >47 && event.keyCode <58))
   return true;
else
   {
       alert("Whoops You Enter Invalid Input Please Enter ()");
       return false;
   }
 
}