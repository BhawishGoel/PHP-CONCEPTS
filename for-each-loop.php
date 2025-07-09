<?php
$users =["bhawish", "peter", "bruce", "lee"];
foreach($users as $x){
    if($x=="peter"){
        continue;
    }
    echo "<h3>".$x."</h3>";
    // if($x=="bruce"){
    //     break;
    // }
    echo "<br/>";
}

foreach($users as $x):
    echo $x;
    echo "<br/>";
endforeach;
?>