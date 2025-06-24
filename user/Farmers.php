<?php
$currentPage = 'farmers';
$farmer_count = 4;
?>
<!doctype html>
<html lang="tl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AniBayan - Farmers</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    
</head>

<body style="padding-top: 100px; background-color: #F9FFD2; font-family: 'Montserrat', sans-serif; color: #5A5A4D;">

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
                        <a href="Home.php" class="nav-link <?php echo !strcasecmp($currentPage, 'home') ? 'active' : ''; ?> fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #FFFFFF; <?php echo !strcasecmp($currentPage, 'home') ? 'border-bottom: 3px solid #EFDE92;' : ''; ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="About.php" class="nav-link <?php echo !strcasecmp($currentPage, 'about') ? 'active' : ''; ?> fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #FFFFFF; <?php echo !strcasecmp($currentPage, 'about') ? 'border-bottom: 3px solid #EFDE92;' : ''; ?>">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Farmers.php" class="nav-link <?php echo !strcasecmp($currentPage, 'farmers') ? 'active' : ''; ?> fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #FFFFFF; <?php echo !strcasecmp($currentPage, 'farmers') ? 'border-bottom: 3px solid #EFDE92;' : ''; ?>">
                            Farmers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ProductList.php" class="nav-link <?php echo !strcasecmp($currentPage, 'products') ? 'active' : ''; ?> fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #FFFFFF; <?php echo !strcasecmp($currentPage, 'products') ? 'border-bottom: 3px solid #EFDE92;' : ''; ?>">
                            Products List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="FindSupply.php" class="nav-link <?php echo !strcasecmp($currentPage, 'supply') ? 'active' : ''; ?> fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #FFFFFF; <?php echo !strcasecmp($currentPage, 'supply') ? 'border-bottom: 3px solid #EFDE92;' : ''; ?>">
                            Find Supply
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <main class="container mt-5" style="max-width: 840px;">
        <h1 class="fw-bold fs-4 mb-4">MEET OUR LOCAL FARMERS</h1>

        <div class="row g-4">
            <?php for ($i = 0; $i < $farmer_count; $i++) : ?>
            <div class="col-lg-6 col-md-6">
                <div class="p-3" style="background-color: #F0EFE4;">
                    <div class="w-100 ratio ratio-1x1 mb-3"
                        style="background-color: #D9D9D9; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23B0B0B0'%3E%3Cpath d='M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: center; background-size: 50%;">
                    </div>

                    <div>
                        <p class="mb-2">Name:</p>
                        <p class="mb-2">Location:</p>
                        <p class="mb-2">Harvest Type:</p>
                        <p class="mb-2">Contact:</p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>