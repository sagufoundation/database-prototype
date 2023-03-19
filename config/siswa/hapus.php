<?php 

    require_once('../connection.php');

    $id = $_POST['id'];
    $result = mysqli_query($mysqli, "DELETE FROM siswa WHERE id=$id");

    header("Location: ../../admin-siswa.php");

