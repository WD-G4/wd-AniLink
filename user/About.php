<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AniBayan - About Us</title>
    <link rel="icon" href="../img/anilinklogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<style>
    body {
        background-color: #F9FFD2;
        padding-top: 120px;
        font-family: 'Montserrat', sans-serif;
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn ease 1s forwards;
        animation-delay: 0.5s;
    }

    .slide-up {
        opacity: 0;
        transform: translateY(30px);
        animation: slideUp ease 1s forwards;
        animation-delay: 0.5s;
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }

    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body style="background-color: #F9FFD2; padding-top: 120px;">

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #006912;">
        <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center" style="height: 60px; overflow: hidden;">
                <img src="../img/anilinklogo.png" alt="AniBayan Logo" style="height: 90px; margin-right: 12px; object-fit: contain;">
                <div class="AniBayan-text fw-bold fs-3" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">
                    AniBayan
                </div>
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
                        <a href="About.php" class="nav-link active fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #FFFFFF; border-bottom: 3px solid #EFDE92;">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Farmers.php" class="nav-link fw-bold text-uppercase mt-2 mx-2 px-md-3 px-2 py-md-2 py-1" style="color: #FFFFFF;">
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


    <main class="container my-5 py-md-4">
        <section class="mb-5 pb-md-4">
            <div class="row align-items-center justify-content-center gy-5">
                <div class="col-md-6">
                    <div class="mb-5 fade-in">
                        <h1 class="display-8 fw-bold text-muted">What is AniBayan?</h1>
                        <p class="lead text-secondary" style="max-width: 45ch; font-size: 1.1rem;">
                            AniBayan comes from the Filipino words "Ani", meaning harvest, and "Bayan", meaning community. It connects local farmers to the community by allowing users to browse farmer profiles and check available products with their prices. Whether you're a farmer looking to share your harvest or a buyer seeking fresh local produce — AniBayan is your community harvest hub.
                        </p>
                    </div>
                    <div class="slide-up">
                        <h2 class="display-7 fw-bold text-muted">Why Support Local Farmers</h2>
                        <p class="text-secondary" style="max-width: 45ch; font-size: 1.1rem;">
                            Supporting local farmers is essential to strengthening the Filipino economy, protecting the environment, and ensuring fresh, nutritious food for every family.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 slide-up">
                    <div id="aboutCarousel" class="carousel slide rounded overflow-hidden" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../img/terrace-rice.png" class="d-block w-100" alt="Rice terraces" style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/p1.jpg" class="d-block w-100" alt="Market scene" style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/p2.jpg" class="d-block w-100" alt="Fresh fruits" style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/p3.jpg" class="d-block w-100" alt="Harvest" style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/p4.jpg" class="d-block w-100" alt="Harvest" style="height: 350px; object-fit: cover;">
                            </div>
                            <div class="carousel-item">
                                <img src="../img/p5.webp" class="d-block w-100" alt="Harvest" style="height: 350px; object-fit: cover;">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="slide-up">
            <div class="row">
                <div class="col-lg-10 col-xl-8">
                    <h2 class="display-8 fw-bold text-muted">OUR MISSION & VISION</h2>
                    <div class="mt-4">
                        <p class="text-secondary">
                            <strong>Mission:</strong> To empower Filipino farmers by providing them with innovative technology and data-driven insights. We aim to create a sustainable agricultural ecosystem that fosters direct connections between producers and consumers, inspires hands-on learning for students, and strengthens community food security.
                        </p>
                        <p class="mt-4 text-secondary">
                            <strong>Vision:</strong> We envision a future where every Filipino farmer is prosperous, food secure, and digitally connected, leading a revitalized agricultural sector that serves as the backbone of the nation's economy and well-being.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer style="background-color: #000000; color: white;" class="py-1 mt-5 fade-in">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-3 mb-md-0">
                    <i class="bi bi-lightbulb" style="font-size: 2rem; color: #EFDE92;"></i>
                    <p class="fw-bold mt-1 mb-0">Educate</p>
                    <p class="mb-0 small" style="color: #cccccc;">Teach, Inform, Enlighten, Guide</p>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <i class="bi bi-diagram-3" style="font-size: 2rem; color: #EFDE92;"></i>
                    <p class="fw-bold mt-1 mb-0">Enable</p>
                    <p class="mb-0 small" style="color: #cccccc;">Empower, Support, Facilitate, Strengthen</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people-fill" style="font-size: 2rem; color: #EFDE92;"></i>
                    <p class="fw-bold mt-1 mb-0">Connect</p>
                    <p class="mb-0 small" style="color: #cccccc;">Unite, Link, Bridge, Engage</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>