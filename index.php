<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

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


  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./image/2.jpg" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="./image/3.jpg" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="./image/4.jpg" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>


  <section>
    <div>
      <h2 class="text-center py-3 ">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
      <?php
    include("./admin/conection.php");
$select="select * from about";
$query=mysqli_query($con,$select);
while($ans=mysqli_fetch_array(($query))){
    ?>
        <div class="col-lg-6 col-md-6 col-12 mb-2">
          <img src="./admin/images/<?php echo $ans['img'] ?> " alt="" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4"><?php echo $ans['title'] ?> </h2>
          <p class="py-3"><?php echo $ans['des'] ?> </p>
          <a href="about.php" class="btn btn-success"><?php echo $ans['link'] ?> </a>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>



  <section class="my-5 ">
    <div class="py-5">
      <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container-fluid  ">
      <div class="row">
      <?php
    include("admin/conection.php");
$select="select * from service";
$query=mysqli_query($con,$select);
while($ans=mysqli_fetch_array(($query))){
    ?>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img style="object-fit: fill;height:250px" class="card-img-top" src="admin/images/<?php echo $ans['img'] ?>" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><?php echo $ans['title'] ?></h4>
              <p class="card-text"><?php echo $ans['subtitle'] ?></p>
              <a href="#" class="btn btn-primary"><?php echo $ans['link'] ?></a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
      <?php
    include("admin/conection.php");
$select="select * from gallery";
$query=mysqli_query($con,$select);
while($ans=mysqli_fetch_array(($query))){
    ?>

        <div class="col-lg-4 col-md-4 col-12">
          <img src="admin/images/<?php echo $ans["img"] ?>" alt="" class="img-fluid pb-3">
        </div>
      <?php } ?>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Our contact</h2>
    </div>
    <div class="w-50 m-auto ">
      <form action="new.php" method="POST" >
        <div class="form-group">
          <label for="">username</label>
          <input type="text" name="name" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="email" autocomplete="off" class="form-control">
        </div>

      
        <div class="form-group">
          <label for="">Mobile No</label>
          <input type="number" name="phone" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label for="">comment</label>
          <textarea class="form-control" name="coment"></textarea>
        </div>

        <button class="btn btn-success" type="submit">Submit</button>
      </form>
    </div>
  </section>




  <footer>
    <h3 class="p-3 bg-dark text-white text-center ">@Nishnat Tour & Travels</h3>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>