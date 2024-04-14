<?php
session_start();
include ("./conection.php");

if(isset($_POST['Insert_About'])){
    $title=$_POST['title'];
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
    $des=$_POST['des'];
    $link=$_POST['link'];

    $insert="insert into about (title,img,des,link) values('$title','$img_name','$des','$link')";
    $insertq=mysqli_query($con,$insert);

    if($insertq){
        $_SESSION['success']="Data is inserted"; 
 header("location: about.php");
    }
    else{
        $_SESSION['status']="Data is not inserted"; 
        header("location: code.php");
    }
}


if(isset($_POST['Insert_service'])){
    $title=$_POST['title'];
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
    $subtitle=$_POST['subtitle'];
    $link=$_POST['link'];

    $insert="insert into service (title,img,subtitle,link) values('$title','$img_name','$subtitle','$link')";
    $insertq=mysqli_query($con,$insert);

    if($insertq){
        $_SESSION['success']="Data is inserted"; 
 header("location: service.php");
    }
    else{
        $_SESSION['status']="Data is not inserted"; 
        header("location: code.php");
    }
}

if(isset($_POST['Insert_gallery'])){
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
   
    $insert="insert into gallery (img) values('$img_name')";
    $insertq=mysqli_query($con,$insert);

    if($insertq){
        $_SESSION['success']="Data is inserted"; 
 header("location: gallery.php");
    }
    else{
        $_SESSION['status']="Data is not inserted"; 
        header("location: code.php");
    }
}


?>