<?php

// // convert array to json
// $user=["name"=>"bhawish","age"=>22,"email"=>"bhawish@123.com"];
// // print_r($user);
// $userJson=json_encode($user);     //json_encode -> used to convert array to json
// echo $userJson;



// kisi dusri application se json data milgya then how u can convert it to normal array

$data='{"name":"bhawish","age":22,"email":"bhawish@123.com"}';
$dataArray=json_decode($data,true); // if we didn't pass the true then we get the object anf we pass we get array
print_r($dataArray); 
?>
