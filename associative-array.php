<?php
$userDetails=[
    "name"=>"bhawish",
    "age"=>"22",
    "city"=>"noida",
    "state"=>"U.P",
    "email"=>"abc@test.com"
];
// echo $userDetails["name"];
// echo "<br/>";
// echo $userDetails["age"];

// foreach($userDetails as $key => $data){
//     // echo $data;
//     // echo $key;
//     echo $key ." is ". $data;
//     echo "<br/>";
// }

foreach($userDetails as $key => $data):
    echo $key ." is ". $data;
    echo "<br/>";
endforeach;
?>