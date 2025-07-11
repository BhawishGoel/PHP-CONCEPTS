<?php
$users=["bhawish","bruce","john","machuley","tony","john","bruce"];
$user=["name"=>"bhawish", "age"=>21,"email"=>"abc@123.com"];


// we use {print_r} bcz array hmara print_r ke andr aata h 





// 1.  to check the variable is array or not ---- for that we use a function {is_array}  if the variable is array then it return 1 otherwise nothing

// echo is_array($users);

// if (is_array($users)){
//     echo " this is an array";
// }else{
//     echo "this is not an array";
// }



// 2.  To count the element in an array.     ---> {count}
// echo count($users);



// 3. to find any of the element from anywhere in an array.      -->{unset}
// unset($users[2]);
// print_r($users);

// 4. add the element at last in an array               --->{array_push}
// array_push($users,"sidhu");
// print_r($users);


// 5. to remove the last element            -----> {array_pop}
// array_pop($users);
// print_r($users);


// 6. if we have to find the keys not value from an associative array.           ---->{array_keys}
// print_r(array_keys($user));


// 7. convert array to string             ---->. {implode}
// echo implode($users);



//. 8. convert string to array             ---->{explode}
// $str="hello how are you";
// print_r(explode(" ",$str));



// 9. merge two array in single array.     ---->{array_merge}
// $data=array_merge($user,$users);
// print_r($data);


// 10. to remove the duplicte elements.      ---->{array_unique}
$data=array_unique($users);
print_r($data);
?>