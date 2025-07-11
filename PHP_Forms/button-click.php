<!DOCTYPE html>
<html lang="en">
<head>
    <title>Call Php Function</title>
</head>
<body>
    <form method="post" action="">
        <button name="button" value ="btn1">Call function</button>
    </form>
</body>
</html>

<?php
// isset -- this function is used that aapki request aarhi h ya nhi 

if(isset($_POST['button'])){   //here we check button request is coming or not,so for that we declare the button name & value 
  btn_click_test();                             // if yes that button request exits then we call a function 


}    
function btn_click_test(){
    echo " function called on button click";
}     


// and same use for $_GET method also and of u don't know which request is coming for that u use $_REQUEST 
// php ke andr directly function call nhi ho skta ----- apko request bnake hi function call krna hoga
?>