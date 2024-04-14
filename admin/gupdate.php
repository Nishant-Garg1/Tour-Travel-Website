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
    <h2 style="padding: 10px;">About Us</h2>
    <?php
include("./conection.php");
$id=$_GET['id'];
$select="select * from gallery where id='$id'";
$query=mysqli_query($con,$select);
$ans=mysqli_fetch_array($query);

if(isset($_POST['Insert_gallery'])){
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");


    $update="update gallery set img='$img_name' where id='$id'";
    $uq=mysqli_query($con,$update);
    header("location: gallery.php");
}

    ?>
        <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control" value="<?php echo $ans['img']  ?>"><img src="./images/<?php echo $ans["img"] ?>" width="150px" height="150px">
</div>
       
      <div >
        <button type="submit" name="Insert_gallery">Update</button>
        </div>
      </form>
</body>
</html>