<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1  style="padding: 20px; " >DASHBOARD</h1>
     <h3  style="padding: 20px; margin-top:50px">Pages</h3>
     <a href="dashboard.php">Home</a>
     <a href="about.php">About Us</a>
     <a href="service.php">Service</a>
     <a href="gallery.php">Gallery</a>
    </nav>

    <form action="code.php" method="POST" enctype="multipart/form-data">
    <h2 style="text-align: center; margin:10px;">Our Services</h2>
    
    <div>
        <label for="">Image</label>
            <input type="file" name="img" autocomplete="off" class="form-control">
        </div>   
    
    <div >
            <label for="">Title</label>
            <input type="text" name="title"  >
        </div>

        <div>
            <label for="">Subtitle</label>
            <input type="text" name="subtitle" >
        </div>

        <div >
          <label for="">Link</label>
            <input type="text" name="link" >
        </div>
       
      <div >
        <button type="submit" name="Insert_service">Save</button>
        </div>
      </form>
    
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Img</th>
      <th>Title</th>
      <th style="padding: 10px 100px;">Subtitle</th>
      <th>Link</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>

  <tbody>
    <?php
    include("./conection.php");
$select="select * from service";
$query=mysqli_query($con,$select);
while($ans=mysqli_fetch_array(($query))){
    ?>
    <tr>
      <td><?php echo $ans['id'] ?></td>
      <td><img src="./images/<?php echo $ans["img"] ?>" alt="" width="150px" height="150px"></td>
      <td><?php echo $ans['title'] ?></td>
      <td ><?php echo $ans['subtitle'] ?></td>
      <td><?php echo $ans['link'] ?></td>
      <td> <a href="supdate.php?id=<?php echo $ans['id'] ?> ">Update</a></td>
      <td> <a style="color: red;" href="delete.php?id=<?php echo $ans['id'] ?> ">Delete</a></td>
    </tr>
    <?php
}
?>
  </tbody>
</table>

</body>
</html>