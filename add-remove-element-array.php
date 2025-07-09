<?php
$users =["bhawish","sam","peter","bruce"];

print_r($users);
echo "<br/>";

array_push($users,"john");  // to add single element 
print_r($users);
echo "<br/>";

array_push($users,"lee","tony");     // to add multiple element 
print_r($users);
echo "<br>";


array_pop($users);           // to remove single element ---it automatically remove 1 element from back side 
print_r($users);
echo "<br>";


array_splice($users,-2);       // to remove multiple elements ---it automatically remove 2 elements from back side 
print_r($users);
?>