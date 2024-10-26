<?php
session_start();
if (!isset($_SESSION['id_admin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Museum Management</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="museum/index.php">Museum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="negara/index.php">Negara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="provinsi/index.php">Provinsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kota/index.php">Kota</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Dashboard</h1>
        <h3 class="mt-4">Manage:</h3>
        <div class="list-group">
            <?php if ($_SESSION['level'] == 'admin' || $_SESSION['level'] == 'superadmin'): ?>
                <a href="museum/index.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Museums
                    <i class="fas fa-building"></i>
                </a>
                <a href="jenis_kunjungan/index.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Visit Types
                    <i class="fas fa-eye"></i>
                </a>
                <a href="pameran/index.php" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    Exhibitions
                    <i class="fas fa-artstation"></i>
                </a>
            <?php endif; ?>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                View Visitors
                <i class="fas fa-users"></i>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>