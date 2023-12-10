<?php
require_once('../required/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM bukutamu WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:guest-book.php?delete=sukses');
    } else {
        header('location:guest-book.php?delete=gagal');
    }
}
else {
    header('location:guest-book.php');
}