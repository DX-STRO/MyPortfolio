<?php
require_once('../required/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = sha1($saltDb . $_POST['password']);

    $query = "INSERT INTO user(username, password) VALUES('{$username}', '{$password}')";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:user.php?tambah=sukses');
    } else {
        header('location:user.php?tambah=gagal');
    }
} else {
    header('location:user.php');
}