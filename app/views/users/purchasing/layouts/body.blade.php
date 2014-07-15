<div class="col-md-9">
   <h1 align="center"> ALARM CLOCK </h1>
   <table align="center">
      <tr>
         <td>
            <body onload=dis()>
               <BGSOUND id="BGSOUND_ID" LOOP=1 SRC="silence.wav">
               <input type="hidden" id="d2" name="d2">
               <input type="text" id="hour" name="hour" size="1" class="time"> :
               <input type=text id="min" name="min" size="1" class="time"> :
               <input type=text id="sec" name="sec" size="1" class="time">
               <br/>
               <select id="hour2" name="hour2" onChange="setv()">
                  <script type='text/javascript'>prtsel(25);</script>
               </select>
               <select id=min2 name=min2 onChange="setv()">
                  <script type='text/javascript'>prtsel(61);</script>
               </select>
               <select id=sec2 name=sec2 onChange="setv()">
                  <script type='text/javascript'>prtsel(61);</script>
               </select>
               <div id="msg">Alarm is OFF</div>
            </body>
         </td>
      </tr>
   </table>
</div>
</div>
</div>
</div>