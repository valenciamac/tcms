function validate()
{
 
if ((event.keyCode > 64 && event.keyCode < 91) || (event.keyCode > 96 && event.keyCode < 123) ||
    (event.keyCode >47 && event.keyCode <58) || (event.keyCode > 44 && event.keyCode < 47)|| event.keyCode==39 || event.keyCode==32)
   return true;
else
   {
       
       return false;
   }
 
}