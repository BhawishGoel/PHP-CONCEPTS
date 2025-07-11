<form method ="post" action="">
    <input type ="text" name ="user" placeholder="enter user name "/>
    <br/>
    <br/>
    <button name="button" value ="set">Set Cookies</button>
        <br/>
    <br/>
    <button name="button" value ="display">Display Cookies</button>
        <br/>
    <br/>
    <button name="button" value ="delete">Delete Cookies</button>
</form>

<?php
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
    $var=$_POST['user'];
    // echo $var;
    setcookie("user",$var);
    echo "cookie is set";
}

if($_POST['button']=="display"){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}
if($_POST['button']=="delete"){
    if(isset($_COOKIE['user'])){
        setcookie("user",null,-1);
    }
}
}
?>