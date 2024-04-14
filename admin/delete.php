<?php
include("./conection.php");

$id=$_GET['id'];
$delete="delete from about where id='$id'";
$dq=mysqli_query($con,$delete);
header("location: about.php");
?>


<?php
include("./conection.php");
$id=$_GET['id'];
$delete="delete from service where id='$id'";
$dq=mysqli_query($con,$delete);
header("location: service.php");

?>

<?php
include("./conection.php");
$id=$_GET['id'];
$delete="delete from gallery where id='$id'";
$dq=mysqli_query($con,$delete);
header("location: gallery.php");

?>