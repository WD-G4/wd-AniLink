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
            background-color: #FFFFFF;
            color: #5A5A4D;
            padding-top: 100px;
        }

        main.container {
            max-width: 960px;
        }

        .page-title {
            font-weight: 700;
            color: #5A5A4D;
            font-size: 1.75rem;
        }

        .search-bar .form-control {
            background-color: #EAEAEA;
            border: 1px solid #EAEAEA;
            border-radius: 12px;
            padding: 12px 20px;
        }

        .search-bar .form-control:focus {
            background-color: #FFFFFF;
            border-color: #70705a;
            box-shadow: none;
        }

        .search-bar .btn {
            background-color: #D9D9D9;
            color: #5A5A4D;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 12px 30px;
        }

        .product-card {
            background-color: #EAEAEA;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .product-details h4 {
            font-family: 'Montserrat', sans-serif;
            color: #5A5A4D;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .product-details p {
            margin-bottom: 0.25rem;
            color: #555;
            font-size: 0.95rem;
        }

        .product-image-placeholder {
            width: 120px;
            height: 120px;
            background-color: #C1C1A6;
            border-radius: 10px;
            flex-shrink: 0;
            position: relative;
        }

        .product-image-placeholder .line {
            position: absolute;
            top: 50%;
            left: 10%;
            width: 80%;
            height: 2px;
            background-color: #F0EFE4;
        }

        .product-image-placeholder .line-1 {
            transform: rotate(45deg);
        }

        .product-image-placeholder .line-2 {
            transform: rotate(-45deg);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #CBB550;">
        <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
            <div class="AniBayan-text fw-bold fs-3" style="color: #567119; font-family: 'Montserrat', sans-serif;">
                AniBayan
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                <ul class="navbar-nav d-flex align-items-md-center" style="font-family: 'Montserrat', sans-serif;">
                    <li class="nav-item">
                        <a href="Home.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #567119;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="About.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #567119;">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="Farmers.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #567119;">Farmers</a>
                    </li>
                    <li class="nav-item">
                        <a href="ProductList.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #567119;">Products List</a>
                    </li>
                    <li class="nav-item">
                        <a href="FindSupply.php" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #567119; background-color: #C9D76E; border-radius: 10px;">Find Supply</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <h1 class="page-title mb-4">Find Supply Near You</h1>

        <form class="row g-3 align-items-center mb-5 search-bar">
            <div class="col">
                <input type="search" class="form-control" placeholder="Search">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn">Search</button>
            </div>
        </form>

        <div class="product-list">
            <?php for ($i = 0; $i < $product_count; $i++) : ?>
                <div class="product-card">
                    <div class="product-image-placeholder">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                    </div>
                    <div class="product-details">
                        <h4>Product Name:</h4>
                        <p>Farmer:</p>
                        <p>Location:</p>
                        <p>Price:</p>
                        <p>Contact:</p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>