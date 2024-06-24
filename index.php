<?php
session_start();
if (isset($_SESSION['user_logged_in'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="text-align: center;">
    <div class="container mt-5">
        <h1 class="mb-3"><marquee direction="left" scrollamount="2" align="center"> APLIKASI SISTEM PENILAIAN MAHASISWA</marquee></h1>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="login.php" class="btn btn-primary">Login</a>
            <a href="register.php" class="btn btn-secondary">Register</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>