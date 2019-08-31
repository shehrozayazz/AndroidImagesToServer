<?php

$con=mysqli_connect("localhost","root","","android_db");

if ($con){
    
    $image=$_POST["image"];
    $name=$_POST["name"];
    $sql="insert into imageinfo values ('".$name."');";
    
    $upload_path="uploads/$name.jpg";


        if (mysqli_query($con,$sql)){
            file_put_contents($upload_path,base64_decode($image));
            echo json_encode(array('response'=>'Image uploaded successfully'));


        }
        else {
            echo json_encode(array('response'=>'Image uploaded Failed!'));
        }

}
else{
    
                echo json_encode(array('response'=>'Image uploaded Failed!'));


}
mysqli_close($con);
?>
