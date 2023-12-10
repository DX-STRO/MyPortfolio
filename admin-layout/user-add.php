<?php
    require_once('../required/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class="container container-login" style="min-height: 100vh;">
        <nav class="show" style="height: 35px;">
            <div class="logo">
                <a href="index.php" class="logo-hover">agaldigin<span>.</span></a>
            </div>
            <div class="kembali">
                <a href="user.php">Kembali</a>
            </div>
        </nav>
        <div class="main-login">
            <div class="login-content">
                <h1 class="title">Tambah User</h1>
                <form action="user-save.php" method="POST">
                    <input type="text" placeholder="Username" class="input" id="username" name="username" autocomplete="off" required>
                    <input type="password" placeholder="Password" class="input" id="password" name="password" autocomplete="off" required>
                    <input type="submit" value="Tambah" class="button">
                </form>
            </div>
        </div>
    </main>
</body>
</html>
<?php
    mysqli_close($connectDb);