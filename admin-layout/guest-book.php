<?php
    session_start();
    require_once('../required/auth.php');
    require_once('../required/database.php');

    onlyAdmin();

    $query = "SELECT * FROM bukutamu ORDER BY id DESC";
    $result = mysqli_query($connectDb, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Book</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container container-login">
        <?php include('navbar.php'); ?>

        <main class="container-admin">
            <div class="main-table">
                <section class="table-header">
                    <h1>Buku Tamu</h1>
                </section>
                <section class="table-body">
                    <table class="data-table" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th class="pesan">Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while($data = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['email']; ?></td>
                                <td class="pesan"><?= $data['pesan']; ?></td>
                                <td>
                                    <form action="">
                                    <a href="contact-delete.php?id=<?= $data['id']; ?>" class="delete">Hapus</a>
                                    </form>
                                </td>
                            </tr>
                            <?php $no++; endwhile; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
    </div>

    <script type="text/javascript">
        <?php 
        if (isset($_GET['delete'])) {
            $statusBukutamu = $_GET['delete'];
            if ($statusBukutamu == 'sukses') : ?>
                alert('Sukses Menghapus Bukutamu');
            <?php elseif ($statusBukutamu == 'gagal') : ?>
                alert('Gagal Menghapus Bukutamu');
            <?php endif;
        }
        ?>
    </script>

</body>

</html>