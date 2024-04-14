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
$select="select * from about where id='$id'";
$query=mysqli_query($con,$select);
$ans=mysqli_fetch_array($query);

if(isset($_POST['Insert_About'])){
    $title=$_POST['title'];
    $img = $_FILES['img'];
    $img_name = $img['name'];
    $img_tem = $img["tmp_name"];
    move_uploaded_file($img_tem,"images/$img_name");
    $des=$_POST['des'];
    $link=$_POST['link'];

    $update="update about set title='$title',img='$img_name',des='$des',link='$link' where id='$id'";
    $uq=mysqli_query($con,$update);
    header("location: about.php");
}

    ?>
        <div >
            <label for="">Title</label>
            <input type="text" name="title"  placeholder ="Enter Tilte" value="<?php echo $ans['title']  ?>">
        </div>

        <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control" value="<?php echo $ans['img']  ?>"><img src="./images/<?php echo $ans["img"] ?>" width="150px" height="150px">
        </div>

        <div>
            <label for="">Description</label>
            <input type="text" name="des" placeholder ="Enter Discription" value="<?php echo $ans['des']  ?>">
        </div>

        <div >
          <label for="">Link</label>
            <input type="text" name="link" placeholder ="Enter Link" value="<?php echo $ans['link']  ?>">
        </div>
       
      <div >
        <button type="submit" name="Insert_About">Update</button>
        </div>
      </form>
</body>
</html>