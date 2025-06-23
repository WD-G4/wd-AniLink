<?php
$products = [
    [
        'name'    => 'Premium Jasmine Rice',
        'farmer'  => 'Rose Santos',
        'location'=> 'Nueva Ecija, Philippines',
        'price'   => '₱55.00 / kg',
        'contact' => '0917-123-4567',
        'image'   => '../img/Rice.png' 
    ],
    [
        'name'    => 'Organic Lettuce',
        'farmer'  => 'Juan Dela Cruz',
        'location'=> 'Benguet, Philippines',
        'price'   => '₱120.00 / kg',
        'contact' => '0928-987-6543',
        'image'   => '../img/Lettuce.png' 
    ],
    [
        'name'    => 'Fresh Mangoes',
        'farmer'  => 'Maria Lopez',
        'location'=> 'Guimaras, Philippines',
        'price'   => '₱85.00 / kg',
        'contact' => '0918-234-5678',
        'image'   => '../img/Mangoes.png' 
    ]
];

$isAdmin = false;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AniBayan - Find Supply</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --brand-color: #70705a;
      --brand-light-green: #C9D76E;
      --brand-yellow: #CBB550;
      --card-bg: #EAEAEA;
      --text-primary: #333;
      --text-secondary: #555;
      --body-font: 'Poppins', sans-serif;
    }

    body {
      font-family: var(--body-font);
      color: var(--text-primary);
      background-color: #f8f9fa;
      padding-top: 120px;
    }

    .navbar-nav .nav-link:not(.active) {
      color: #567119 !important;
    }

    .page-heading {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      color: var(--brand-color);
    }

    .search-bar .form-control {
      border: 1px solid #ccc;
    }

    .search-bar .btn-brand {
      background-color: var(--brand-color);
      color: white;
      border: none;
    }

    .search-bar .btn-brand:hover {
      background-color: #5a5a48;
    }

    .product-card {
      background-color: var(--card-bg);
      border-radius: 15px;
      padding: 1.5rem;
      margin-bottom: 1.5rem;
      display: flex;
      gap: 1.5rem;
      align-items: center;
    }

    .product-image-placeholder {
      width: 120px;
      height: 120px;
      background-color: #C1C1A6;
      border-radius: 10px;
      flex-shrink: 0;
      overflow: hidden; 
    }

    .product-image-placeholder img {
      width: 100%;
      height: 100%;
      object-fit: cover; 
    }

    .product-details h4 {
      font-family: 'Montserrat', sans-serif;
      color: var(--brand-color);
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .product-details p {
      margin-bottom: 0.25rem;
      color: var(--text-secondary);
    }
  </style>
</head>

<body>

<nav class="navbar navbar-expand-md fixed-top" style="background-color: var(--brand-yellow);">
  <div class="container-fluid px-5 py-3">
    <a class="navbar-brand fw-bold fs-3" href="index.php" style="color: #567119; font-family: 'Montserrat', sans-serif;">
      AniBayan
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
      aria-controls="navMenu" aria-expanded="false" aria-label="Toggle Navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
      <ul class="navbar-nav" style="font-family: 'Montserrat', sans-serif;">
        <li class="nav-item">
          <a href="index.php" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">Home</a>
        </li>
        <li class="nav-item">
          <a href="About.php" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">About</a>
        </li>
        <li class="nav-item">
          <a href="Farmers.php" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">Farmers</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">Products List</a>
        </li>
        <li class="nav-item">
          <a href="Find Supply.php" class="nav-link active fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1"
            style="color: #567119; background-color: var(--brand-light-green); border-radius: 10px;">
            Find Supply
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container my-5">
  <h1 class="page-heading mb-4">Find Supply Near You</h1>

  <form class="row g-3 align-items-center mb-5 search-bar">
    <div class="col">
      <label for="searchInput" class="visually-hidden">Search</label>
      <input type="search" class="form-control form-control-lg" id="searchInput" placeholder="Search for a product (e.g., rice, mango)" autocomplete="off">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-brand btn-lg">Search</button>
    </div>
  </form>

  <div class="product-list">

    <?php foreach ($products as $product): ?>
    <div class="product-card">
      <div class="product-image-placeholder">
        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
      </div>
      <div class="product-details">
        <h4><?php echo htmlspecialchars($product['name']); ?></h4>
        <p><strong>Farmer:</strong> <?php echo htmlspecialchars($product['farmer']); ?></p>
        <p><strong>Location:</strong> <?php echo htmlspecialchars($product['location']); ?></p>
        <p><strong>Price:</strong> <?php echo htmlspecialchars($product['price']); ?></p>
        <p><strong>Contact:</strong> <?php echo htmlspecialchars($product['contact']); ?></p>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>