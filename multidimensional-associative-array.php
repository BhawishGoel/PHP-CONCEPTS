<?php
$users = [
    ["name"=>"bhawish","age"=>"21","city"=>"noida"],
        ["name"=>"peter","age"=>"26","city"=>"goa"],
            ["name"=>"bruce","age"=>"19","city"=>"lucknow"]
];

foreach($users as $x){
    foreach($x as $key => $item){
        echo $key ." is ". $item;
        echo "<br/>";
    }
            echo "<br/>";
                    echo "<br/>";
}



?>