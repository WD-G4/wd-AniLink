<?php
$farmers = [
    [
        'name'      => 'Juan Dela Cruz',
        'specialty' => 'Organic Vegetables Farmer',
        'location'  => 'Benguet, Philippines',
        'image'     => '../img/Juan.jpg'
    ],
    [
        'name'      => 'Rose Santos',
        'specialty' => 'Rice and Corn Grower',
        'location'  => 'Nueva Ecija, Philippines',
        'image'     => '../img/Rose.png'
    ],
];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AniBayan - Partner Farmers</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-color: #70705a;
            --text-primary: #333;
            --text-secondary: #555;
            --body-font: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--body-font);
            color: var(--text-primary);
            background-color: #fff;
            padding-top: 120px;
        }

        .navbar-nav .nav-link:not(.active) {
            color: #567119 !important;
        }

        .farmer-card {
            background-color: #E6E9A5;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .farmer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .farmer-card .img-placeholder {
            background-color: #f8f9fa;
            border-radius: 10px;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            overflow: hidden;
        }


        .farmer-card .img-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #CBB550;">
        <div class="container-fluid px-5 py-3">
            <a class="navbar-brand fw-bold fs-3" href="index.php" style="color: #567119; font-family: 'Montserrat', sans-serif;">
                AniBayan
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
                    aria-controls="navMenu" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                    <ul class="navbar-nav" style="font-family: 'Montserrat', sans-serif;">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="About.php" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Farmers.php" class="nav-link active fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1"
                                style="color: #567119; background-color: #C9D76E; border-radius: 10px;">
                                Farmers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">
                                Products List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link fw-bold text-uppercase mx-2 px-md-3 px-2 py-md-2 py-1">
                                Find Supply
                            </a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>

    <main class="container my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold" style="color: var(--brand-color);">Partner Farmers</h1>
            <p class="lead" style="color: var(--text-secondary);">The heart and soul of AniBayan. Get to know the dedicated individuals who grow your food.</p>
        </div>

        <div class="row justify-content-center g-4">

            <?php foreach ($farmers as $farmer) { ?>
                <div class="col-md-6 col-lg-5">
                    <div class="farmer-card p-4 rounded">
                        <div class="img-placeholder mb-3">
                            <img src="<?php echo htmlspecialchars($farmer['image']); ?>" alt="Picture of <?php echo htmlspecialchars($farmer['name']); ?>">
                        </div>
                        <h4 class="fw-bold mb-1" style="color: #567119;"><?php echo htmlspecialchars($farmer['name']); ?></h4>
                        <p class="mb-1 text-muted"><?php echo htmlspecialchars($farmer['specialty']); ?></p>
                        <p class="mb-0"><i class="bi bi-geo-alt-fill me-1"></i><?php echo htmlspecialchars($farmer['location']); ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>