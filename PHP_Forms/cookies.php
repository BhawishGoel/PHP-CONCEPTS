<?php

// $fruit="apple";
setcookie("fruit","apple",time()+(86400));
setcookie("color","green",time()+(86400));
setcookie("color","red",time()+(86400));
// print_r($_COOKIE);

// to verify that the cookie is set or not 
if(isset($_COOKIE['fruit'])){
    echo "first cookie is : ". $_COOKIE['fruit'];
}else{
    echo "no cookie set";
}
echo "<br/>";
if(isset($_COOKIE['color'])){
    echo "second cookie is : ". $_COOKIE['color'];
}else{
    echo "no cookie set";
}
echo "<br/>";
if(isset($_COOKIE['color'])){
    echo "third cookie is : ". $_COOKIE['color'];
}else{
    echo "no cookie set";
}
echo "<br/>";


// to see all the cookies at one command 

// print_r($_COOKIE);

?>