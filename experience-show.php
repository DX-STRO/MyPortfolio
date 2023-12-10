<?php
    session_start();
    require_once('required/database.php');
    require_once('required/auth.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Experience</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main class="container">
        <nav class="show">
            <div class="logo">
                <a href="#" class="logo-hover">agaldigin<span>.</span></a>
            </div>
            <ul class="main">
                <li>
                    <a href="index.php#home" class="home linknav-hover">Home</a>
                </li>
                <li>
                    <a href="index.php#about" class="about linknav-hover">About</a>
                </li>
                <li>
                    <a href="index.php#works" class="works linknav-hover">Works</a>
                </li>
                <li>
                    <a href="index.php#contact" class="contact linknav-hover">Contact</a>
                </li>
            </ul>
            <div class="login">
                <div class="after-login">
                    <?php if(checkLogin()) : ?>
                    <a href="admin-layout/admin.php" class="isAdmin">Admin</a>
                    <?php else: ?>
                    <a href="login.php" class="isLogin">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>

        <div class="container-myexperience">
            <section class="left-container">
                <div class="main-content">
                    <div class="content photo-profile">
                        <div class="the-photo">
                            <img src="assets/img/oppaldin-nobg.png">
                        </div>
                        <div class="the-text">
                            <div class="container-text">
                                <h1>Aldin Nur Adzin</h1>
                                <span>aldinnuradzin@gmail.com</span>
                                <div class="logo">
                                    <a href="#">
                                        <img src="assets/img/github.png" class="github">
                                    </a>
                                    <a href="#">
                                        <img src="assets/img/instagram.png" class="instagram">
                                    </a>
                                    <a href="#">
                                        <img src="assets/img/twitter.png" class="twitter">
                                    </a>
                                    <a href="#">
                                        <img src="assets/img/facebook.png" class="facebook">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-me">
                            <a href="#">Contact Me</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="right-container">
                <div class="main-content">
                    <div class="title">
                        <h1>My Experience</h1>
                    </div>
                    <?php
                    $queryExp = "SELECT * FROM experience ORDER BY id ASC";
                    $resultExp = mysqli_query($connectDb, $queryExp);
                    
                    while ($data = mysqli_fetch_array($resultExp)) : 
                    ?>
                        <div class="main-exp">
                            <h4>
                                <?php 
                                    $startDate = $data['date_start'];
                                    echo date("F Y", strtotime($startDate));
                                ?>
                                -
                                <?php 
                                    $startEnd = $data['date_end'];
                                    echo date("F Y", strtotime($startEnd));
                                ?>
                            </h4>
                            <h2><?= $data['title']; ?></h2>
                            <p class="tools"><?= $data['tools']; ?></p>
                            <p class="description"><?= $data['description']; ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>
        </div>

        <footer>
            <h2>agaldigin.</h2>
            <p>&#169; All rights reserved by Aldin Nur Adzin</p>
        </footer>

    </main>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
</body>

</html>