<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Nishnat Tour & Travels</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="gallery.php">Gallery</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
       
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Serch</button>
      </form>
    </div>
  </div>
</nav>

<section>
    <div>
        <h2 class="text-center py-3 " >About Us</h2>
    </div>
    <div class="container-fluid ">
        <div class="row ">
        <?php
    include("./admin/conection.php");
$select="select * from about";
$query=mysqli_query($con,$select);
while($ans=mysqli_fetch_array(($query))){
    ?>
      <div class="col-lg-6 col-md-6 col-12 mb-2">
    <img src="./admin/images/<?php echo $ans["img"] ?>" alt="" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
   <h2 class="display-4"><?php echo $ans['title'] ?></h2>
   <p class="py-3"><?php echo $ans['des'] ?></p>
<a href="about.php" class="btn btn-success"><?php echo $ans['link'] ?></a>     
</div>
<?php } ?>
        </div>
    </div>
</section>



<footer>
    <h3 class="p-3 bg-dark text-white text-center ">@nishanttechnical</h3>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>