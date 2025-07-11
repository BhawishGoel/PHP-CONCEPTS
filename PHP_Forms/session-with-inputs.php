<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
</head>
<body>
    <form action=""method="post">
        <input type="text" name="user" placeholder="Enter user name ">
        <br/>
        <br/>
        <button name="button" value ="set">Set Sessions</button>
                <br/>
        <br/>
        <button name="button" value ="get">Get Sessions</button>
                <br/>
        <br/>
        <button name="button" value ="delete">Delete Sessions</button>

    </form>
</body>
</html>

<?php
session_start();
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }

        if($_POST['button']=="get"){
             echo $_SESSION['user'];
    }

            if($_POST['button']=="delete"){
             session_destroy();
    }
}

?>
