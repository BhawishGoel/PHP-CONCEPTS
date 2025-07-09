<?php
// to count the length of the string 
$name = "Bhawish Goel";
echo strlen($name);
echo "<br/>";


// to check the datatype of the varibale 
$var = true;
var_dump($var);
echo "<br/>";


// to print the date 
echo date("d");    // to print date 
echo "<br/>";

echo date("y");    // to print year
echo "<br/>";

echo date("z");    // print the total days till the current date 
echo "<br/>";

echo date("a");    // to print am/pm
echo "<br/>";

echo date("l");   // to print the day 
echo "<br/>";

echo date("M");    // to print month 
echo "<br/>";

echo date ("m.d.y");  
echo "<br/>";


// to print the current version of php
// echo phpinfo();       // to check the php version
// echo "<br/>";

// to check this is string or not 
$var = "string";
$b = 123;
echo is_string($var);
echo "<br/>";
echo is_string($b);
echo "<br/>";

// to find the random values 
echo rand();
echo "<br/>";

// to stop the code of execution after the die word , it is used for debugging

echo "before";
echo "<br/>";
// die();
// exit();


echo "after";
echo "<br/>";


$str = " bhawish goel";
echo substr($str,7);
?>