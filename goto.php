<?php
// $x=20;
// echo "before condition <br/>";

// if($x==20){
//     goto jump;
// }
// $name = "bhawish <br/>";
// echo $name ;




// jump:
// echo "statement is jumped on line no 18";


for($i=0;$i<10;$i++){
    echo " $i<br/>";

    if($i==5){
        goto outsideLoop;
    }
}

outsideLoop:
echo "loop is break";


?>