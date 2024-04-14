<?php
$username="root";
$server="localhost";
$password="";
$db="secoundpro";

$con=mysqli_connect($server,$username,$password,$db);

mysqli_select_db($con,'secoundpro');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $coment=$_POST['coment'];


    

    $insert="insert into registersecound (name,email,phone,coment) values('$name','$email','$phone','$coment')";
    $insertquery=mysqli_query($con,$insert);
    header("location: index.php");

?>