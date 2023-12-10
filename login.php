<?php
    session_start();
    require_once('required/database.php');
    require_once('required/auth.php');

    if(checkLogin()) {
        header('location:index.php');
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = sha1($saltDb . $_POST['password']);
        // Usernamenya = aldin
        // Passwordnya = aldin

        $query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
        $result = mysqli_query($connectDb, $query);
        $data = mysqli_fetch_array($result);

        if($data) {
            $_SESSION['is_login'] = true;
            $_SESSION['user'] = $data;
            header('location:index.php?status=sukses');       
            exit;
        } else {
            header('location:login.php?status=gagal');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class="container container-login" style="min-height: 100vh;">
        <nav class="show" style="height: 35px;">
            <div class="logo">
                <a href="index.php" class="logo-hover">agaldigin<span>.</span></a>
            </div>
            <div class="kembali">
                <a href="index.php">Kembali</a>
            </div>
        </nav>
        <div class="main-login">
            <div class="login-content">
                <h1 class="title">Login</h1>
                <form action="login.php" method="POST">
                    <input type="text" placeholder="Username" class="input" id="username" name="username" autocomplete="off" required>
                    <input type="password" placeholder="Password" class="input" id="password" name="password" autocomplete="off" required>
                    <input type="submit" value="Login" class="button">
                </form>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        <?php
            if(isset($_GET['status'])) {
                $status = $_GET['status'];
                if($status == 'sukses') : ?>
                    alert('Login Berhasil');
                <?php elseif($status == 'gagal') : ?>
                    alert('Login Gagal. Username atau Password Salah');
                    <?php endif;
            }
        ?>
    </script>
</body>
</html>
<?php
    mysqli_close($connectDb);