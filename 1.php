<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="style.css">

<?php
if(isset($_POST['send'])){
    $files=$_POST['files'];
    $text=$_POST['text_in_files'];
    if(empty($files)){
        $files="error.txt";
    }else{
        date_default_timezone_set("Asia/Tbilisi");
        $files= date("Y-m-d-h-i-s-a").$files.".txt";
    }
    echo $files;
    $file=fopen($files,'w');
    //var_dump($file);
    fwrite($file,$text);

    
}



?>

<div>
    <form method='post'>
    <input type="text" name='files'>
    <br>
    <br>
    <textarea name="text_in_files" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button name='send'>Send</button>
    </form>

</div>


</body>
</html>