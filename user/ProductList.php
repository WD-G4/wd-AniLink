<?php
include('../connect.php');

$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

$query = "SELECT farmers.name, farmers.address, product.productName, product.productPricePerKilo, product.imagePath FROM product JOIN farmers ON product.farmerId = farmers.id";

if (!empty($search)) {
    $query .= " WHERE product.productName LIKE '%$search%' OR farmers.name LIKE '%$search%' OR farmers.address LIKE '%$search%'";
}

$result = executeQuery($query);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List</title>
    <link rel="icon" href="../img/anilinklogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #F9FFD2;
        padding-top: 100px;
    }

    .product-card {
        background-color: #ffffff;
        border: none;
        border-radius: 10px;
        max-width: 500px;
        height: 355px;
        padding: 1rem;
        transition: transform 0.3s ease;
        animation: fadeInUp 0.8s ease forwards;
        opacity: 0;
        transform: translateY(30px);
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>

    <nav class="navbar navbar-expand-md fixed-top shadow" style="background-color: #006912;">
        <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center" style="height: 60px; overflow: hidden;">
                <img src="../img/anilinklogo.png" alt="AniBayan Logo" style="height: 90px; margin-right: 12px; object-fit: contain;">
                <div class="AniBayan-text fw-bold fs-3" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">
                    AniBayan
                </div>
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
                        <a href="ProductList.php" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #FFFFFF; border-bottom: 3px solid #EFDE92;">
                            Products List
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <form method="GET" class="row g-3 align-items-center mb-5 justify-content-center">
            <div class="col-10 col-md-6">
                <input type="search" class="form-control" name="search" placeholder="Search" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </form>
    </div>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-12 col-md-8 col-lg-4 mb-4">
                    <div class="product-card p-3 mb-4" style="background-color: #ffffff; border: none; border-radius: 10px; max-width: 500px; height: 355px;">
                        <div class="d-flex">
                            <img src="../img/<?php echo htmlspecialchars($row['imagePath']); ?>" alt="Product Image" style="width: 180px; height: 180px; border-radius: 5px; object-fit: cover; margin-right: 15px;">
                            <div class="d-flex align-items-center">
                                <p class="fw-bold mb-2"><?php echo htmlspecialchars($row['productName']); ?></p>
                            </div>
                        </div>
                        <div class="mt-auto p-3">
                            <p class="fw-bold mb-2">Farmer: <?php echo htmlspecialchars($row['name']); ?></p>
                            <p class="fw-bold mb-2">Location: <?php echo htmlspecialchars($row['address']); ?></p>
                            <p class="fw-bold mb-2">Price: ₱<?php echo number_format($row['productPricePerKilo'], 2); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>