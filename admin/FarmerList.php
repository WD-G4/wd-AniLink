<?php
session_start();
if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: ../index.php");
    exit();
}
include('../connect.php');
$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$query = "SELECT farmers.id, farmers.name, farmers.address, product.productName FROM farmers JOIN product ON farmers.productId = product.id";
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
    <title>AniBayan</title>
    <link rel="icon" href="../img/anilinklogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-md fixed-top shadow" style="background-color: #006912;">
        <div class="container-fluid mt-2 px-5 py-3 d-flex align-items-center justify-content-between">
            <div class="fw-bold fs-3" style="color: #FFFFFF; font-family: 'Montserrat', sans-serif;">AniBayan
                <button type="button" class="btn btn-light fw-bold ms-3" style="border-radius: 50%; font-size: 14px;">Admin</button>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                <ul class="navbar-nav d-flex align-items-md-center" style="font-family: 'Montserrat', sans-serif;">
                    <li class="nav-item ms-3">
                        <a href="HomeAdmin.php" class="nav-link fw-bold text-uppercase" style="color: #FFFFFF;">Dashboard</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="#" class="nav-link fw-bold text-uppercase" style="color: #FFFFFF; border-bottom: 3px solid #EFDE92;">Farmers</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="../logout.php" class="btn btn-success fw-bold text-uppercase" style="color: #FFFFFF;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pt-2" style="margin-top: 130px;">
        <form method="GET" class="d-flex flex-wrap justify-content-center align-items-center gap-2 mb-4">
            <div class="col-10 col-md-6">
                <input type="search" class="form-control text-center" name="search"
                    placeholder="Search Farmer..."
                    value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>"
                    style="width: 100%; min-width: 250px; height: 50px; background-color: #EBEFA6; border: none; border-radius: 8px; font-size: 16px; color: #014B0E;">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn fw-bold"
                    style="background-color: #EBEFA6; color: #014B0E; min-width: 120px; max-width: 180px; height: 50px; border: none; border-radius: 8px; font-size: 15px;">
                    Search
                </button>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <table class="table align-middle">
                        <thead style="background-color: #006912; color: #FFFFFF;">
                            <tr>
                                <th scope="col">Farmer ID</th>
                                <th scope="col">Farmer</th>
                                <th scope="col">Location</th>
                                <th scope="col">Products</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider" style="color: #006912;">
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                                    <td><?php echo htmlspecialchars($row['productName'] ?? 'None'); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>