<?php 

    require_once('../connection.php');

    if(isset($_POST['submit'])) {

        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];        
        $kabkota = $_POST['kabkota'];        
        $folder_google_drive = $_POST['folder_google_drive'];        
                
        $result = mysqli_query($mysqli, "INSERT INTO siswa(nama_lengkap,nik,kabkota) VALUES('$nama_lengkap','$nik','$kabkota')");

        header("Location: ../../admin-siswa.php");
    }

