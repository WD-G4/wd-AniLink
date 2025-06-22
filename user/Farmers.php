<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniBayan | Partner Farmers</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #fdfedc;
            color: #334d1f;
        }

        header {
            background-color: #c3b04d;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: bold;
            font-size: 1.5rem;
            color: #4f5920;
        }

        .admin-tag {
            background-color: #4f5920;
            color: white;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 0.9rem;
            margin-left: 10px;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #334d1f;
            font-weight: bold;
        }

        nav a.active, nav a:hover {
            background-color: #e3eda7;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .content {
            text-align: center;
            padding: 2rem;
        }

        .content h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .content p {
            font-size: 0.9rem;
            color: #3b4c24;
            margin-bottom: 2rem;
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
            padding: 0 1rem;
        }

        .card {
            background-color: #edf3ae;
            border-radius: 20px;
            padding: 1.5rem;
            width: 300px;
            text-align: center;
        }

        .card img {
            width: 160px;
            height: 120px;
            background-color: white;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .card .info {
            font-size: 0.9rem;
            color: #1d3015;
        }

        @media (max-width: 768px) {
            .cards-container {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            AniBayan <span class="admin-tag">admin</span>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Company</a>
            <a href="#">Product</a>
            <a href="#" class="active">Farmers</a>
        </nav>
    </header>

    <div class="content">
        <h2>Partner Farmers</h2>
        <p>The heart and soul of AniBayan. Get to know the dedicated individuals who grow your food</p>

        <div class="cards-container">
            <?php
            // You can replace this array with data from a database
            $farmers = [
                [
                    'name' => 'Juan Dela Cruz',
                    'description' => 'Organic vegetable farmer',
                    'location' => 'Benguet, Philippines'
                ],
                [
                    'name' => 'Maria Santos',
                    'description' => 'Rice and corn grower',
                    'location' => 'Nueva Ecija, Philippines'
                ]
            ];

            foreach ($farmers as $farmer) {
                echo '<div class="card">';
                echo '<img src="placeholder.png" alt="Farmer Photo">';
                echo '<div class="info">';
                echo '<strong>' . $farmer['name'] . '</strong><br>';
                echo $farmer['description'] . '<br>';
                echo $farmer['location'];
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
