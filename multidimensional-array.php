<?php

$users =[
    [1,"bhawish","21"],
    [2,"peter","22"],
    [3,"bruce","19"]
];
// echo "<pre>";
// print_r($users);
// echo "<pre>";

for($i=0;$i<count($users);$i++){
    // print_r($users[$i]);
    // echo "<br/>";
    for($j=0; $j<count($users[$i]); $j++){
        echo $users[$i][$j];
        echo "<br/>";
    }
}
?>