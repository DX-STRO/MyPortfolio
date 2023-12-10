<?php
require_once('../required/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM experience WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:experience.php?delete=sukses');
    } else {
        header('location:experience.php?delete=gagal');
    }
}
else {
    header('location:experience.php');
}