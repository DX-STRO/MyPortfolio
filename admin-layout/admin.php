<?php
    session_start();
    require_once('../required/auth.php');
    onlyAdmin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container container-login">
        <?php include('navbar.php'); ?>

        <main class="container-admin">
            <div class="container-content">
                <h1 class="welcome">Hallo <?= getUserLogin('username'); ?>. Selamat Datang Di Halaman Admin</h1>
            </div>
        </main>
    </div>
</body>

</html>