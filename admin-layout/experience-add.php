<?php
    session_start();
    require_once('../required/auth.php');
    require_once('../required/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Experience</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../datepicker/datepicker.min.css" />
</head>

<body>
    <main class="container container-login" style="min-height: 100vh;">
        <nav class="show" style="height: 35px;">
            <div class="logo">
                <a href="index.php" class="logo-hover">agaldigin<span>.</span></a>
            </div>
            <div class="kembali">
                <a href="experience.php">Kembali</a>
            </div>
        </nav>
        <div class="main-login">
            <div class="login-content">
                <h1 class="title">Tambah Experience</h1>
                <form action="experience-save.php" method="POST">
                    <input type="text" placeholder="Title Job" class="input" id="title" name="title" autocomplete="off" required>
                    <input type="text" placeholder="Tools" class="input" id="tools" name="tools" autocomplete="off" required>
                    <input type="text" placeholder="Date Start" class="input start-datepicker" id="date_start" name="date_start" autocomplete="off" required>
                    <input type="text" placeholder="Date End" class="input end-datepicker" id="date_end" name="date_end" autocomplete="off" required>
                    <textarea placeholder="Please Input Your Description" class="input" id="description" name="description" rows="5" autocomplete="off" required></textarea>
                    <input type="submit" value="Tambah" class="button">
                </form>
            </div>
        </div>
    </main>
</body>

<script src="../datepicker/datepicker.min.js"></script>
<script src="../datepicker/dayjs.min.js"></script>
<script type="text/javascript">
    const startPicker = datepicker('.start-datepicker', {
        formatter: (input, date, instance) => {
            const value = dayjs(date)
            input.value = value.format('YYYY-MM-DD') // => '1/1/2099'
        }
    })
    const endPicker = datepicker('.end-datepicker',  {
        formatter: (input, date, instance) => {
            const value = dayjs(date)
            input.value = value.format('YYYY-MM-DD') // => '1/1/2099'
        }
    });
</script>

</html>
<?php
    mysqli_close($connectDb);