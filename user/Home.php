<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AniBayan</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

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
            <a href="#" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #FFFFFF;  border-bottom: 3px solid #EFDE92;">
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
            <a href="FindSupply.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
              style="color: #FFFFFF;">
              Find Supply
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid p-0 m-0 position-relative" style="height:100vh;">
    <img src="../img/h3.jpg" alt="" style="object-fit:cover; width:100%; height:100vh; position:absolute; top:0; left:0; z-index:0;">
    <div class="container position-relative z-1 d-flex align-items-center justify-content-center text-center" style="height:100vh;">
      <div class="row">
        <div class="col-12 p-3 text-center">
          <!-- Title -->
          <h1 class="fw-bold mb-3 d-none d-lg-block"
            style="text-transform:uppercase; letter-spacing:2px; color:#FFFFFF; font-size:80px;">AniBayan</h1>
          <h1 class="fw-bold mb-3 d-none d-md-block d-lg-none"
            style="text-transform:uppercase; letter-spacing:2px; color:#FFFFFF; font-size:60px;">AniBayan</h1>
          <h1 class="fw-bold mb-3 d-block d-md-none"
            style="text-transform:uppercase; letter-spacing:2px; color:#FFFFFF; font-size:45px;">AniBayan</h1>

          <!-- Subtitle -->
          <p class="mx-auto d-none d-lg-block"
            style="max-width:700px; color:#FFFFFF; font-size:28px;">Support Local. Eat Fresh. Save More.</p>
          <p class="mx-auto d-none d-md-block d-lg-none"
            style="max-width:700px; color:#FFFFFF; font-size:22px;">Support Local. Eat Fresh. Save More.</p>
          <p class="mx-auto d-block d-md-none"
            style="max-width:700px; color:#FFFFFF; font-size:18px;">Support Local. Eat Fresh. Save More.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>