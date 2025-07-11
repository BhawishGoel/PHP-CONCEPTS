<?php


//this is done when the file is on the server----->

// $file="files/abc.text";
// $myfile= fopen($file,"r") or die("unable to read file");
// echo fread($myfile,filesize($file));   // we have to set write the name fo file and set the size of the file 
// fclose($myfile);



// but when the file is in our local system ------>
// then we hve to make the html form 




if(isset($_FILES['file'])){
    $file=$_FILES['file']['tmp_name'];
    $myfile= fopen($file,"r") or die("unable to read file");
    echo fread($myfile,filesize($file));
    fclose($myfile);
}


?>



<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name ="file">
    <br>
    <br>
    <button>Read File</button>
</form>