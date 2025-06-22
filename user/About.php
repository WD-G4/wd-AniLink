<?php
    $pageTitle = "AniBayan - About Us";
    $platformDescription = "AniLinks is a platform that connects farmers to real-time data, students to hands-on learning and communities to actionable insights.";

    $imageFilePath = "../img/terrace rice.png";
    $imagePath = "../img/terrace%20rice.png";
    $imageAltText = "A vibrant rice field in the Philippines at dawn.";

    $imageExists = file_exists($imageFilePath);
?>
<!DOCTYPE html
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

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
        }

        .section-heading {
            font-weight: 700;
            color: var(--brand-color);
        }

        .section-text {
            color: var(--text-secondary);
            max-width: 45ch;
        }

        .mission-vision-text {
            color: var(--text-secondary);
        }

        .image-placeholder {
            background-color: #f8f9fa;
            border: 1px dashed #ced4da;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 250px;
        }
    </style>
</head>

<body>

<main class="container my-5 py-md-4">
    <section aria-labelledby="intro-heading" class="mb-5 pb-md-4">
        <div class="row align-items-center justify-content-center gy-5">
            <div class="col-md-6">
                <div class="mb-5">
                    <h1 id="intro-heading" class="section-heading display-4">AniBayan?</h1>
                    <p class="section-text lead">
                        <?php echo htmlspecialchars($platformDescription); ?>
                    </p>
                </div>
                <div>
                    <h2 class="section-heading display-4">Why Support Local Farmers</h2>
                    <p class="section-text lead">
                        <?php echo htmlspecialchars($platformDescription); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <figure class="mb-0">
                    <?php if ($imageExists): ?>
                        <img src="<?php echo htmlspecialchars($imagePath); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($imageAltText); ?>">
                        <figcaption class="figure-caption text-end mt-2"><?php echo htmlspecialchars($imageAltText); ?></figcaption>
                    <?php else: ?>
                        <div class="image-placeholder p-3 rounded">
                            <p class="text-muted text-center mb-0">
                                <strong>Image not found.</strong><br>
                                Please check the path:<br>
                                <code><?php echo htmlspecialchars($imageFilePath); ?></code>
                            </p>
                        </div>
                    <?php endif; ?>
                </figure>
            </div>
        </div>
    </section>

    <section aria-labelledby="mission-heading" class="mt-5 pt-md-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <h2 id="mission-heading" class="section-heading display-4">OUR MISSION & VISION</h2>
                <div class="mt-4">
                    <p class="lead mission-vision-text">
                        <strong>Mission:</strong> To empower Filipino farmers by providing them with innovative technology and data-driven insights. We aim to create a sustainable agricultural ecosystem that fosters direct connections between producers and consumers, inspires hands-on learning for students, and strengthens community food security.
                    </p>
                    <p class="lead mt-4 mission-vision-text">
                        <strong>Vision:</strong> We envision a future where every Filipino farmer is prosperous, food secure, and digitally connected, leading a revitalized agricultural sector that serves as the backbone of the nation's economy and well-being.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

</body>

</html>