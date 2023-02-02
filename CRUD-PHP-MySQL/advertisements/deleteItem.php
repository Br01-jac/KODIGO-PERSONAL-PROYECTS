<?php
include "../templates/Header.php";
include "../model/Connection.php";

$idQuote = $_GET['id'];
?>

<div class="card mt-5 container text-center" style="width: 70%; height:65vh; align-items:center;">
  <img src="../delete.png" class="card-img-top mt-4" alt="..." style="width: 25%;">
  <div class="card-body">
    <h4 class="card-text">Are you sure you want to delete this medical appointment?</h4>
  </div>
  <div class="container text-center">
  <a href="../templates/appointments.php" class="btn btn-dark m-2 mb-5" style="width: 20%;">Return</a>
  <a href="../controllers/Delete.php?id=<?php echo $idQuote?>" class="btn btn-danger m-2 mb-5" style="width: 20%;">Delete</a>
  </div>
 
</div>