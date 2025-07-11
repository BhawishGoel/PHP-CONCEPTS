<?php
// to create a file we have three function
// 1. fopen ---to open the file in the server, --- it have 2 params that is 1st-> file ka name , 2nd-> ki aap kya function perform krwana chahte ho read ya create (r/w)
// 2. fwrite ---then we write the file means we add the content/data in the file 
// 3. fclose  ---- we close the file 


// $fileName="dummy.text";
// $content="this is dummy file ";
// $file= fopen($fileName,"w") or die("unable to create file");
// fwrite($file,$content);
// fclose($file);
// echo "file created";




// on server when we create file it shhows permission denied for that i use the command
//.        chmod -R 777 /Applications/XAMPP/xamppfiles/htdocs/test/PHP_Forms/files

if (isset($_POST['filename'])){
$fileName="files/".$_POST['filename'];
$content=$_POST['content'];
$file= fopen($fileName,"w") or die("unable to create file");
fwrite($file,$content);
fclose($file);
echo "file created";
}
?>





<form action="" method="post">
    <input type="text" placeholder="enter file name" name = "filename"/>
    <br/>
    <br/>
    <textarea name="content"></textarea>
    <br>
    <br>
    <button>Create file</button>
</form>
