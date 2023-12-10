<?php
require_once('../required/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM user WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:user.php?delete=sukses');
    } else {
        header('location:user.php?delete=gagal');
    }
}
else {
    header('location:user.php');
}