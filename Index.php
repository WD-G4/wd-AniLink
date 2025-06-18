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
    body {
      padding-top: 100px;
      background-color: #F9FFD2;
    }
  </style>
</head>

<?php
$isAdmin = true;
?>

<body>

  <nav class="navbar navbar-expand-md fixed-top" style="background-color: #CBB550;">
    <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
      <div class="AniBayan-text fw-bold fs-3" style="color: #567119; font-family: 'Montserrat', sans-serif;">
        AniBayan
        <?php
            if($isAdmin) {?>
        <button type="button" class=" admin btn btn-secondary" style="border-radius: 50%;">admin</button>
        <?php } ?>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
        aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <ul class="navbar-nav d-flex align-items-md-center" style="font-family: 'Montserrat', sans-serif;">
          <li class="nav-item">
            <a href="#" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #567119; background-color: #C9D76E; border-radius: 10px;">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #567119;">
              Company
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #567119;">
              Services
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #567119;">
              Products
            </a>
          </li>
           <?php
            if($isAdmin) {?>
          <li class="nav-item">
            <a href="#" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #567119;">
              Users
            </a>
          </li>
           <?php } ?>
           <?php
            if($isAdmin) {?>
          <li class="nav-item">
            <a href="#" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #567119;">
              Farmers
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container py-5">
    <div class="d-flex justify-content-center mb-4">
      <div class="Title h1 fw-bold text-uppercase" style="color: #567119; font-family:'Montserrat', sans-serif;">FRESHLY HARVESTED</div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-6">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo odio itaque tempore amet mollitia vitae eligendi ducimus aliquam animi illo saepe, alias eius accusamus dolorum consectetur possimus nisi iste at!</p>
      </div>
      <div class="col-md-6 text-end">
        <img src="img/pic.png" alt="pek" class="img-fluid">
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>