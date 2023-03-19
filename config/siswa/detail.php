<?php 

    require_once('./config/connection.php');
    
    $id = $_GET['id'];
    $siswa_detail = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id=$id");
    
    while($siswa = mysqli_fetch_array($siswa_detail))
    {
        $nama_lengkap = $siswa['nama_lengkap'];
        $nik = $siswa['nik'];
        $kabkota = $siswa['kabkota'];
        $folder_google_drive = $siswa['folder_google_drive'];
    }