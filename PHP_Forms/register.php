<?php
// $name = $_REQUEST['user_name'];
// $password = $_REQUEST['user_password'];
// echo $name;
// echo "<br/>";
// echo $password;
// echo "<br/>";
$_REQUEST['dummy'] = "test";

foreach($_REQUEST as $key => $data){
    echo $key ." is ". $data;
    echo "<br/>";
}
?>