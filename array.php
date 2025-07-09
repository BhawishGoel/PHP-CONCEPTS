<?php

// $users = array("bhawish","peter","bruce lee");
$users =["bhawish", "peter", "bruce lee"];
// echo $users[0];
// echo "<br/>";
// echo $users[1];
// echo "<br/>";
// echo $users[2];
// echo count($users);

for($i=0; $i<count($users); $i++){
    echo  "<h1 style= 'color:red'> $users[$i]</h1> ";
    echo "<br/>";
}

?>