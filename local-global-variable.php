<?php
// local variable 
// function getName(){
//     $name = "Bhawish Goel";
//     echo $name;
// }
//   // echo $name;
// getName();



// // Global variable

// $name = "Bhawish";
// function getName(){
// }
// echo $name;
// getName();


// Calling Global variable inside the function

// $name ="bhawish";
// function getName(){
//     global $name ;              
//     echo " local var : $name ";
// }
// echo $name ;
// echo "<br/>";
// getName();





// // Both local and global variable with same keys means same name ---->
// $name ="Bhawish Goel";
// function getName(){
//     $name = "Peter";
//     echo "local var : $name";
// }
// echo $name ;
//  echo "<br/>";
// getName();





// variable nested function

$name = " bhawish";
function test(){
    $name ="Goel";
    echo $name ;
    echo "<br/>";

    function innerTest(){
        $name = " bruce";
        echo $name;
        echo "<br/>";
    }
}
test();
innerTest();
echo $name;

?>