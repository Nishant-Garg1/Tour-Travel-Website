<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <h2 style="text-align: center; margin:20px;">Our Services</h2>
    <?php
include("./conection.php");
$id=$_GET['id'];
$select="select * from service where id='$id'";
$query=mysqli_query($con,$select);
$ans=mysqli_fetch_array($query);

if(isset($_POST['Insert_service'])){
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
    $title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
    $link=$_POST['link'];

    $update="update service set img='$img_name',title='$title',subtitle='$subtitle',link='$link' where id='$id' ";
    $uq=mysqli_query($con,$update);
    header("location: service.php");
}
?>
    <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control" value="<?php echo $ans['img'] ?>">
            <img src="./images/<?php echo $ans['img']?>" width="120px" height="100px">
        </div>   
    
    <div >
            <label for="">Title</label>
            <input type="text" name="title" value="<?php echo $ans['title']  ?>" >
        </div>

        <div>
            <label for="">Subtitle</label>
            <input type="text" name="subtitle" value="<?php echo $ans['subtitle'] ?>">
        </div>

        <div >
          <label for="">Link</label>
            <input type="text" name="link" value="<?php echo $ans['link'] ?>">
        </div>
       
      <div >
        <button type="submit" name="Insert_service">Update</button>
        </div>
      </form>
</body>
</html>