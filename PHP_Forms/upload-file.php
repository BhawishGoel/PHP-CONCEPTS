<?php


// // to get all the information of the file which we upload 
// echo "<pre>";
// print_r($_FILES['fileUpload']);
// echo "<pre>";





if($_FILES['fileUpload']){                 // if files exits krti ho toh then make a path  of file name 
$path = $_FILES['fileUpload']['name'];
// echo $path;

$upload_path ="./uploads".$path;           // to set the path where we have to upload the file .....so we   make a uploads folder and inside that we put the $path which is the path name of the file   


// echo $upload_path;
if(move_uploaded_file( $_FILES['fileUpload']['tmp_name'], $upload_path)){            // move_upload_file is the function in php which is used to upload the file but when we upload the file for that we have to take the temporary name 
    echo "file uploaded";
}
else{
    die("failed to upload");
}
}
else{
    die("no file found");
}




// if it shows permision denied in the website then run the below command in the terminal 
//chmod -R 0777 /Applications/XAMPP/xamppfiles/htdocs/test/PHP_Forms/uploads

?>
