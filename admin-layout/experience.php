<?php
    session_start();
    require_once('../required/database.php');
    require_once('../required/auth.php');

    onlyAdmin();

    $query = "SELECT * FROM experience ORDER BY id DESC";
    $result = mysqli_query($connectDb, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container container-login">
        <?php include('navbar.php'); ?>

        <main class="container-admin">
            <div class="main-table">
                <section class="table-header">
                    <div class="header-content">
                        <h1>Experience</h1>
                        <a href="experience-add.php" class="add">Tambah Experience</a>
                    </div>
                </section>
                <section class="table-body">
                    <table class="data-table" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Tools</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while($data = mysqli_fetch_array($result)) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $data['title']; ?></td>
                                <td><?= $data['tools']; ?></td>
                                <td>
                                    <div class="bttn">
                                        <a href="experience-edit.php?id=<?= $data['id']; ?>" class="edit">Edit</a>
                                        <span>|</span>
                                        <a href="experience-delete.php?id=<?= $data['id']; ?>" class="delete">Hapus</a>
                                    </div>
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
        if (isset($_GET['tambah'])) {
            $statusTambah = $_GET['tambah'];
            if ($statusTambah == 'sukses') : ?>
                alert('Sukses Menambahkan Experience');
            <?php elseif ($statusTambah == 'gagal') : ?>
                alert('Gagal Menambahkan Experience');
            <?php endif;
        }

        if (isset($_GET['update'])) {
            $statusUpdate = $_GET['update'];
            if ($statusUpdate == 'sukses') : ?>
                alert('Sukses Update Experience');
            <?php elseif ($statusUpdate == 'gagal') : ?>
                alert('Gagal Update Experience');
            <?php endif;
        }

        if (isset($_GET['delete'])) {
            $statusDelete = $_GET['delete'];
            if ($statusDelete == 'sukses') : ?>
                alert('Sukses Menghapus Experience');
            <?php elseif ($statusDelete == 'gagal') : ?>
                alert('Gagal Menghapus Experience');
            <?php endif;
        }
        ?>
    </script>
    
</body>

</html>

<?php
    mysqli_close($connectDb);