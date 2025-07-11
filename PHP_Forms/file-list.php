<?php

$path="files";
$items=scandir($path); // scandir-> it helps to scan that folder in which we have to get the file list and 
                       // it we give me an array jiske andr sari files ke name mention h 
// echo "<pre>";
// print_r($items);
// echo "<pre>";


// when we scan the folder then always we get the single and double dots then how to remove it shown below
// there is a funtion {array_diff} which have 2 params in which one have file name and the other one it that which we have to remove so by making an array we put the the single and double dot

$items = array_diff($items, array(".",".."));
// print_r($items);

foreach($items as $item){
    // echo $item;  // in this we can't open the file so for that we use anchor tag
    echo "<a href=./files/$item>$item</a>";
    echo "<br/>";
}
?>