<?php
$product_count = 2;
?>
<!doctype html>
<html lang="tl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AniBayan - Find Supply</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #F9FFD2;
      color: #5A5A4D;
      padding-top: 100px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-md fixed-top" style="background-color: #006912;">
    <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
      <div class="AniBayan-text fw-bold fs-3" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">
        AniBayan
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
        aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <ul class="navbar-nav d-flex align-items-md-center" style="font-family: 'Montserrat', sans-serif;">
          <li class="nav-item">
            <a href="Home.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #FFFFFF;">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="About.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #FFFFFF;">
              About
            </a>
          </li>
          <li class="nav-item">
            <a href="Farmers.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #FFFFFF;">
              Farmers
            </a>
          </li>
          <li class="nav-item">
            <a href="ProductList.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #FFFFFF;">
              Products List
            </a>
          </li>
          <li class="nav-item">
            <a href="FindSupply.php" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #FFFFFF; border-bottom: 3px solid #EFDE92;">
              Find Supply
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <h1 class="fw-bold mb-4 text-center">Find Supply Near You</h1>

    <form class="row g-3 align-items-center mb-5 justify-content-center">
      <div class="col-10 col-md-6">
        <input type="search" class="form-control" placeholder="Search">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-success">Search</button>
      </div>
    </form>

    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <?php for ($i = 0; $i < $product_count; $i++) { ?>
          <div class="card mb-4 p-3 d-flex flex-row align-items-center"
            style="background-color: #ffffff; border: none; border-radius: 15px; min-height: 130px;">
            <div class="me-4">
              <img src="../img/pic.png" alt="Product Image"
                style="width: 100px; height: 100px; border-radius: 10px; object-fit: cover;">
            </div>
            <div class="flex-grow-1">
              <h5 class="fw-bold mb-2">Product Name:</h5>
              <p class="mb-1">Farmer:</p>
              <p class="mb-1">Location:</p>
              <p class="mb-1">Price:</p>
              <p class="mb-0">Contact:</p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>