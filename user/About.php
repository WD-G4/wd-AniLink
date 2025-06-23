<?php
$pageTitle = "AniBayan - About Us";
$platformDescription = "AniLinks is a platform that connects farmers to real-time data, students to hands-on learning and communities to actionable insights.";

$imagePath = "../img/terrace-rice.png";
$imageAltText = "A vibrant rice field in the Philippines at dawn.";

$imageExists = file_exists($imagePath);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-color: #70705a;
            --text-primary: #333;
            --text-secondary: #555;
        }

        body {
            color: var(--text-primary);
            background-color: #fff;
            padding-top: 120px;
        }

        .section-heading {
            font-weight: 700;
            color: var(--brand-color);
            font-size: 2.75rem;
        }

        .section-text {
            color: var(--text-secondary);
            max-width: 45ch;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .mission-vision-text {
            color: var(--text-secondary);
            font-size: 1rem;
            line-height: 1.7;
        }

        .image-placeholder {
            background-color: #f8f9fa;
            border: 1px dashed #ced4da;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 250px;
        }
        @keyframes bounceEffect {

            0%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-15px);
            }

            60% {
                transform: translateY(5px);
            }
        }

        .interactive-image {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .interactive-image:hover {
            animation: bounceEffect 0.8s ease-in-out;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #CBB550;">
        <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
            <div class="AniBayan-text fw-bold fs-3" style="color: #567119; font-family: 'Montserrat', sans-serif;">
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
                            style="color: #567119; ">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="About.php" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #567119; background-color: #C9D76E; border-radius: 10px;">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Farmers.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #567119;">
                            Farmers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ProductList.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #567119;">
                            Products List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="FindSupply.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1"
                            style="color: #567119;">
                            Find Supply
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5 py-md-4">
        <section aria-labelledby="intro-heading" class="mb-5 pb-md-4">
            <div class="row align-items-center justify-content-center gy-5">
                <div class="col-md-6">
                    <div class="mb-5">
                        <h1 id="intro-heading" class="section-heading">What is AniBayan?</h1>
                        <p class="section-text lead">
                            <?php echo htmlspecialchars($platformDescription); ?>
                        </p>
                    </div>
                    <div>
                        <h2 class="section-heading">Why Support Local Farmers</h2>
                        <p class="section-text">
                            AniLinks is a platform that connects farmers to real-time data, students to hands-on learning and communities to actionable insights.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="mb-0">
                        <?php if ($imageExists) { ?>
                            <img src="<?php echo htmlspecialchars($imagePath); ?>" class="img-fluid rounded interactive-image" alt="<?php echo htmlspecialchars($imageAltText); ?>">
                            <figcaption class="figure-caption text-center mt-2">
                                <?php echo htmlspecialchars($imageAltText); ?>
                            </figcaption>
                        <?php } { ?>
                            <div class="image-placeholder p-3 rounded">
                                <p class="text-muted text-center mb-0">
                                    <strong>Image not found.</strong><br>
                                    Please check the path:<br>
                                    <code><?php echo htmlspecialchars($imagePath); ?></code>
                                </p>
                            </div>
                        <?php } ?>
                    </figure>
                </div>
            </div>
        </section>

        <section aria-labelledby="mission-heading" class="mt-5 pt-md-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <h2 id="mission-heading" class="section-heading">OUR MISSION & VISION</h2>
                    <div class="mt-4">
                        <p class="mission-vision-text">
                            <strong>Mission:</strong> To empower Filipino farmers by providing them with innovative technology and data-driven insights. We aim to create a sustainable agricultural ecosystem that fosters direct connections between producers and consumers, inspires hands-on learning for students, and strengthens community food security.
                        </p>
                        <p class="mt-4 mission-vision-text">
                            <strong>Vision:</strong> We envision a future where every Filipino farmer is prosperous, food secure, and digitally connected, leading a revitalized agricultural sector that serves as the backbone of the nation's economy and well-being.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>