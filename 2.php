<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="style.css">

<?php

$large_size="";
//$error_type="";
if(isset($_POST['upload'])){
    $file=$_FILES['file'];
    $foldername=$_POST['folder'];
    $filename=$file['name'];
    //print_r($file);
        if($file['size']>50*1024*1024){
            $large_size="large size";
        }
    $file_type=pathinfo($file['name'] , PATHINFO_EXTENSION);


    
   
    if(!is_dir($foldername)){
        $res=mkdir($foldername);
    }


    if(empty($large_size)){
        $move=move_uploaded_file($file['tmp_name'], "$foldername/".$filename); 
    }
    if(empty($foldername)){
        echo "folder empty";
    }

    // if(!$res){
    //     "folder no uploaded";
    // }

    // if($move){
    //     echo " file uploaded";
    // }
    // else{
    //     echo " file no uploaded";
    // }
    
    echo $r=file_get_contents("$foldername/".$filename);
    echo ("$foldername/".$filename);

    

//     $files_in_folder=scandir($foldername);

//  for($i=2;$i<count($files_in_folder);$i++){
//      echo '<p><a   href="2.php?file='.$i.'">'.$files_in_folder[$i].'</a></p>';
//  }   
// }


    //print_r($files_in_folder);
    
}

//     if($res){
//         echo "created folder";
//     }
//     else{
//         echo "no created";
//     }
//    }
        

?>




<div>
<form  method='post' enctype="multipart/form-data" >
<input type="text" name='file' >
<br><br>
<label >folder name</label>
<input type="text" name='folder'> 
<br><br>
<button name='upload'>Upload</button>

</form>
</div>






</body>
</html>