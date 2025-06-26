<?php
include('../connect.php');

$query = "SELECT farmers.name, farmers.address, farmers.imagePath, product.productName FROM farmers JOIN product ON farmers.productId = product.id";
$result = executeQuery($query);
?>
<!DOCTYPE html>
<html lang="tl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AniBayan - Farmers</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      padding-top: 100px;
      background-color: #F9FFD2;
      font-family: 'Montserrat', sans-serif;
      color: #333;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      padding: 2rem 1rem;
    }

    .farmer-card {
      background-color: #fff;
      border-radius: 1.5rem;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
      text-align: center;
      padding: 2rem 1rem;
      transition: transform 0.3s ease;
      animation: fadeInUp 0.8s ease forwards;
      opacity: 0;
      transform: translateY(30px);
    }

    .farmer-card:hover {
      transform: translateY(-5px);
    }

    .farmer-image {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #EFDE92;
      margin-bottom: 1rem;
    }

    .farmer-name {
      font-weight: 700;
      font-size: 1.2rem;
    }

    .farmer-address {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 0.5rem;
    }

    .product-tag {
      display: inline-block;
      background-color: #D4EFDF;
      color: #006912;
      padding: 0.4rem 0.9rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1.title {
      text-align: center;
      font-weight: 700;
      margin-top: 1rem;
      color: #344E41;
    }
  </style>
</head>

<body style="padding-top: 100px; background-color: #F9FFD2; font-family: 'Montserrat', sans-serif; color: #5A5A4D;">

    <nav class="navbar navbar-expand-md fixed-top shadow" style="background-color: #006912;">
        <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
            <div class="AniBayan-text fw-bold fs-3" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">
                AniBayan
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                <ul class="navbar-nav d-flex align-items-md-center" style="font-family: 'Montserrat', sans-serif;">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #FFFFFF;">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="About.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #FFFFFF; ">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Farmers.php" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #FFFFFF; border-bottom: 3px solid #EFDE92;">
                            Farmers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ProductList.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #FFFFFF;">
                            Products List
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="container">
    <h1 class="title">MEET OUR LOCAL FARMERS</h1>
    <div class="card-container">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="farmer-card">
          <img src="<?php echo '../img/' . htmlspecialchars($row['imagePath']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="farmer-image">
          <div class="farmer-name"><?php echo htmlspecialchars($row['name']); ?></div>
          <div class="farmer-address"><?php echo htmlspecialchars($row['address']); ?></div>
          <div class="product-tag"><?php echo htmlspecialchars($row['productName'] ?? 'No Product'); ?></div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
