<?php
require_once('../required/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $tools = $_POST['tools'];
    $date_start = $_POST['date_start'];
    $date_end = $_POST['date_end'];
    $description = $_POST['description'];
    
    $query = "UPDATE experience 
                SET  
                title = '{$title}', 
                tools = '{$tools}', 
                date_start = '{$date_start}', 
                date_end = '{$date_end}', 
                description = '{$description}' 
                ";
    $query .= "WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:experience.php?update=sukses');
    } else {
        header('location:experience.php?update=gagal');
    }
} else {
    header('location:experience.php');
}