<?php

echo date("d M Y");
echo "<br/>";




// if we want the cuurent time zone which match our cuurent laptop time then we have to set it 

echo date_default_timezone_get();
echo "<br/>";
 date_default_timezone_set('Asia/Kolkata');
echo date("h:i:sa");   
echo "<br/>";
?>