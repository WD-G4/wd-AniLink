<?php
include('../connect.php');

$query = "SELECT farmers.name, farmers.address, farmers.imagePath, product.productName FROM farmers LEFT JOIN product ON farmers.productId = product.id";
$result = executeQuery($query);
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
                    <li class="nav-item">
                        <a href="FindSupply.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #FFFFFF;">
                            Find Supply
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5" style="max-width: 840px;">
        <h1 class="fw-bold fs-4 mb-4">MEET OUR LOCAL FARMERS</h1>

        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-6 mb-4 d-flex justify-content-center">
                    <div class="card d-flex flex-column" style="width: 100%; max-width: 35rem; height: 35rem;">
                        <img src="<?php echo '../img/' . $row['imagePath']; ?>" alt="<?php echo $row['name']; ?>" class="img-fluid" style="object-fit: cover; height: 400px;">
                        <div class="mt-auto p-3">
                            <p class="mb-2">Name: <?php echo htmlspecialchars($row['name']); ?></p>
                            <p class="mb-2">Location: <?php echo htmlspecialchars($row['address']); ?></p>
                            <p class="mb-2">Product: <?php echo htmlspecialchars($row['productName']); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>