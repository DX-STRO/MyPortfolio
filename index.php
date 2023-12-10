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
    <title>Agaldigin.</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HOME SECTION -->
    <div class="landing-page" id="home">
        <img src="assets/img/layer-1.png" class="layer layer-1">
        <img src="assets/img/layer-2.png" class="layer layer-2">
        <img src="assets/img/layer-3.png" class="layer layer-3">
        <img src="assets/img/layer-4.png" class="layer layer-4">
        <img src="assets/img/layer-5.png" class="layer layer-5">
        <img src="assets/img/layer-6.png" class="layer layer-6">
        <img src="assets/img/layer-7.png" class="layer layer-7">
        <div class="blur-effect-top"></div>
        <div class="blur-effect-right"></div>
        <div class="blur-effect-bottom"></div>
        <div class="blur-effect-left"></div>

        <nav class="nav">
            <div class="logo">
                <a href="#" class="logo-hover">agaldigin<span>.</span></a>
                <img src="assets/img/menu.png" class="menu-btn">
            </div>
            <ul class="main">
                <div class="container-main">
                    <li class="home-list">
                        <a href="#" class="home linknav-hover">Home</a>
                    </li>
                    <li class="about-list">
                        <a href="#about" class="about linknav-hover">About</a>
                    </li>
                    <li class="works-list">
                        <a href="#works" class="works linknav-hover">Works</a>
                    </li>
                    <li class="contact-list">
                        <a href="#contact" class="contact linknav-hover">Contact</a>
                    </li>
                    <li class="contact-list">
                        <?php if(checklogin()) : ?>
                            <a href="admin-layout/admin.php" class="login linknav-hover"><b>Admin</b></a>
                        <?php else: ?>
                            <a href="login.php" class="login linknav-hover"><b>Login</b></a>
                        <?php endif; ?>
                    </li>
                </div>
            </ul>
        </nav>

        <div class="jumbo-text">
            <h1 class="myname">ALDIN NUR ADZIN'S</h1>
            <h1 class="portfolio"><br>WEBSITE PORTFOLIO</h1>
        </div>
        <div class="typed">
            <p>Saya Bukanlah Superman<br>Saya Hanyalah Seorang Manusia Biasa Yang Telah Menjadi Seorang <br><span
                    class="auto-type"></span></p>
        </div>
        <div class="socmed">
            <div class="container-socmed">
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
        <div class="marquee-text">
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
            <p>PROJEK UAS ALDIN NUR ADZIN</p>
        </div>
    </div>

    <main class="container">
        <nav>
            <div class="logo">
                <a href="#" class="logo-hover">agaldigin<span>.</span></a>
            </div>
            <ul class="main">
                <li>
                    <a href="#" class="home linknav-hover">Home</a>
                </li>
                <li>
                    <a href="#about" class="about linknav-hover">About</a>
                </li>
                <li>
                    <a href="#works" class="works linknav-hover">Works</a>
                </li>
                <li>
                    <a href="#contact" class="contact linknav-hover">Contact</a>
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

        <!-- ABOUT SECTION -->
        <section class="about-section" id="about">
            <div class="grid">
                <div class="section">
                    <h1>About Me</h1>
                </div>
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
                </div>
                <div class="content credentials">
                    <a href="experience-show.php">
                        <div class="container-credentials">
                            <div class="signature">
                                <img src="assets/img/signature.png">
                            </div>
                            <span>Lebih Lanjut</span>
                            <div class="container-more">
                                <div class="more">
                                    <p>Tentang Saya</p>
                                    <img src="assets/img/rocket.png">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content me">
                    <div class="container-me">
                        <div class="hero">
                            <img src="assets/img/line-planet.png">
                        </div>
                        <h1>Siapa Saya?</h1>
                        <p>
                            Saya adalah seorang web developer pemula, mahasiswa, dan bekerja sampingan sebagai abang
                            kurir.
                            Sebagai mahasiswa, saya mengambil jurusan terkait IT untuk memperluas pengetahuan saya dalam
                            bidang teknologi. Selain itu, saya juga bekerja sebagai abang kurir, yang mengajarkan saya
                            tentang manajemen waktu, interaksi dengan pelanggan, dan pemecahan masalah. Saya berkomitmen
                            untuk terus belajar dan mengembangkan keterampilan saya dalam pengembangan web, sambil
                            menggabungkan pengalaman hidup yang beragam untuk mencapai tujuan karir saya.</p>
                    </div>
                </div>
                <div class="content experience">
                    <div class="container-experience">
                        <div class="title">
                            <h3>Pengalaman</h3>
                        </div>
                        <div class="content-exp content-1">
                            <span>2019 - 2020</span>
                            <p>Basic Programming Learner</p>
                            <span>C++ - Java - HTML - CSS - PHP - Javascript</span>
                        </div>
                        <div class="content-exp content-2">
                            <span>2020 - 2021</span>
                            <p>Web Programming Project</p>
                            <span>Web App PDAM Payment Point Online Banking</span>
                        </div>
                    </div>
                </div>
                <div class="content education">
                    <div class="container-education">
                        <div class="title">
                            <h3>Edukasi</h3>
                        </div>
                        <div class="content-edu content-1">
                            <span>2019-2022</span>
                            <p>Rekayasa Perangkat Lunak</p>
                            <span>SMK Negeri 7 Samarinda</span>
                        </div>
                        <div class="content-edu content-2">
                            <span>2022-2026</span>
                            <p>Teknologi Rekayasa Perangkat Lunak</p>
                            <span>Politani Samarinda</span>
                        </div>
                    </div>
                </div>
                <div class="content socmed">
                    <div class="container-socmed">
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
                        <h1>Let's<br>Learning <span>Togehter.</span></h1>
                    </div>
                </div>
                <div class="content next">
                    <a href="#works">
                        <div class="container-next">
                            <h3>Nächste</h3>
                            <img src="assets/img/next-logo.png">
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- WORKS SECTION -->
        <section class="works-section" id="works">
            <div class="grid">
                <div class="content content-1">
                    <a href="#">
                        <div class="container-content">
                            <div class="content-img">
                                <img src="assets/img/content-1.jpg">
                            </div>
                            <span>WEB DESIGNING</span>
                            <div class="bot-content">
                                <p>Title</p>
                                <img src="assets/img/forward-logo.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="title">
                    <h1>All Projects</h1>
                </div>
                <div class="content content-2">
                    <a href="#">
                        <div class="container-content">
                            <div class="content-img">
                                <img src="assets/img/content-2.jpg">
                            </div>
                            <span>MOBILE DESIGNING</span>
                            <div class="bot-content">
                                <p>Title</p>
                                <img src="assets/img/forward-logo.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content content-3">
                    <a href="#">
                        <div class="container-content">
                            <div class="content-img">
                                <img src="assets/img/content-3.jpg">
                            </div>
                            <span>BRANDING</span>
                            <div class="bot-content">
                                <p>Title</p>
                                <img src="assets/img/forward-logo.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content content-4">
                    <a href="#">
                        <div class="container-content">
                            <div class="content-img">
                                <img src="assets/img/content-4.jpg">
                            </div>
                            <span>PHOTOGRAPHY</span>
                            <div class="bot-content">
                                <p>Title</p>
                                <img src="assets/img/forward-logo.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content content-5">
                    <a href="#">
                        <div class="container-content">
                            <div class="content-img">
                                <img src="assets/img/content-5.jpg">
                            </div>
                            <span>WEB DESIGNING</span>
                            <div class="bot-content">
                                <p>Title</p>
                                <img src="assets/img/forward-logo.png">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content content-6">
                    <a href="#">
                        <div class="container-content">
                            <div class="content-img">
                                <img src="assets/img/content-6.jpg">
                            </div>
                            <span>MOBILE DESIGNING</span>
                            <div class="bot-content">
                                <p>Title</p>
                                <img src="assets/img/forward-logo.png">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section class="contact-section" id="contact">
            <div class="left-content">
                <div class="contact-info">
                    <p class="left-title">CONTACT INFO</p>
                    <div class="container-content mail">
                        <div class="logo">
                            <img src="assets/img/email.png">
                        </div>
                        <div class="content">
                            <p class="content-title">MAIL SAYA</p>
                            <p>aldinnuradzin@gmail.com</p>
                            <p>ingpoo@gmail.com</p>
                        </div>
                    </div>
                    <div class="container-content contact">
                        <div class="logo">
                            <img src="assets/img/telephone.png">
                        </div>
                        <div class="content">
                            <p class="content-title">KONTAK SAYA</p>
                            <p>+62-853-4973-4475</p>
                            <p>+62-123-4567-8899</p>
                        </div>
                    </div>
                    <div class="container-content location">
                        <div class="logo">
                            <img src="assets/img/location.png">
                        </div>
                        <div class="content">
                            <p class="content-title">LOKASI</p>
                            <p>Samarinda, Kalimantan Timur</p>
                            <p>Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="social-info">
                    <p class="left-title">SOCIAL INFO</p>
                    <div class="logo">
                        <a href="#" class="container-content github">
                            <img src="assets/img/github.png">
                        </a>
                        <a href="#" class="container-content instagram">
                            <img src="assets/img/instagram.png">
                        </a>
                        <a href="#" class="container-content twitter">
                            <img src="assets/img/twitter.png">
                        </a>
                        <a href="#" class="container-content facebook">
                            <img src="assets/img/facebook.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <div class="container-content">
                    <h1 class="right-title">Contact Me</h1>
                    <form action="admin-layout/contact-save.php" method="POST">
                        <input type="text" class="input" id="nama" name="nama" placeholder="Nama" autocomplete="off" required>
                        <input type="email" class="input" id="email" name="email" placeholder="Email" autocomplete="off" required>
                        <textarea cols="30" rows="10" class="input" id="pesan" name="pesan" placeholder="Pesan Anda" autocomplete="off" required></textarea>
                        <input type="submit" value="Kirim Pesan" class="button">
                    </form>
                </div>
            </div>
        </section>

        <footer>
            <h2>agaldigin.</h2>
            <p>&#169; All rights reserved by Aldin Nur Adzin</p>
        </footer>

    </main>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript">
        <?php
            if(isset($_GET['bukutamu'])) {
                $statusBukuTamu = $_GET['bukutamu'];
                if($statusBukuTamu == 'sukses') : ?>
                alert('Sukses Mengirim Pesan');
                <?php elseif ($statusBukuTamu == 'gagal') : ?>
                    alert('Gagal Mengirim Pesan');
                <?php endif;
            }
        ?>
    </script>
</body>

</html>