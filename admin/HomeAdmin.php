<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
  header("Location: ../index.php");
  exit();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AniBayan</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    .glass-card {
      backdrop-filter: blur(8px) brightness(100%);
      background-color: rgba(255, 255, 255, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: inset 4px 4px 10px 4px rgba(255, 255, 255, 0.2);
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md fixed-top shadow" style="background-color: #006912;">
    <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
      <div class="fw-bold fs-3" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">AniBayan
        <button type="button" class="btn btn-light fw-bold ms-3" style="border-radius: 50%; font-size: 14px;">Admin</button>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <ul class="navbar-nav d-flex align-items-md-center" style="font-family: 'Montserrat', sans-serif;">
          <li class="nav-item ms-3">
            <a href="#" class="nav-link fw-bold text-uppercase"
              style="color: #FFFFFF; border-bottom: 3px solid #EFDE92;">Dashboard</a>
          </li>
          <li class="nav-item ms-3">
            <a href="FarmerList.php" class="nav-link fw-bold text-uppercase" style="color: #FFFFFF;">Farmer List</a>
          </li>
          <li class="nav-item ms-3">
            <a href="ProductList.php" class="nav-link fw-bold text-uppercase" style="color: #FFFFFF;">Product List</a>
          </li>
          <li class="nav-item ms-3">
            <a href="../logout.php" class="btn btn-success fw-bold text-uppercase" style="color: #FFFFFF;">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid p-0 m-0 position-relative" style="height:100vh;">
    <img src="../img/h3.jpg" alt=""
      style="object-fit:cover; width:100%; height:100vh; position:absolute; top:0; left:0; z-index:0;">
    <div class="container position-relative z-1 d-flex align-items-center justify-content-center pt-0 pt-md-5" style="height: 100vh;">
      <div class="row justify-content-center gap-4">
      <div class="col-md-5 col-10">
        <div class="card shadow-lg glass-card"
          style="border-radius: 30px; color: #FFFFFF; text-align: center; padding: 40px; max-width: 420px; margin: auto;">
          <div class="card-body">
            <i class="bi bi-person-fill" style="font-size: 50px;"></i>
            <h3 class="fw-bold mt-3" style="font-size: 24px;">Total Farmers</h3>
            <p class="fw-bold" style="font-size: 30px;">0000</p>
          </div>
        </div>
      </div>

      <div class="col-md-5 col-10">
        <div class="card shadow-lg glass-card"
          style="border-radius: 30px; color: #FFFFFF; text-align: center; padding: 40px; max-width: 420px; margin: auto;">
          <div class="card-body">
            <i class="bi bi-basket-fill" style="font-size: 50px;"></i>
            <h3 class="fw-bold mt-3" style="font-size: 24px;">Total Products</h3>
            <p class="fw-bold" style="font-size: 30px;">0000</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>