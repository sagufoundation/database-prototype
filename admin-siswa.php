<?php require_once('config/siswa/semua.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database - SAGU Foundation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">


</head>

<body class="bg-light">

    <!-- .container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="mb-3">
                            <h1 class="fw-bold">DATABASE SISWA SAGU FOUNDATION</h1>
                            <p class="h3">Program Pembinaan Beasiswa Siswa Unggul Papua.</p>
                        </div>

                        <div class="row">

                            <!-- <div class="col">
                                <a href="admin-siswa-add.php" class="btn btn-primary mb-3 fw-bold rounded-0 text-uppercase" target="_blank">Tambah Siswa</a>
                            </div> -->
                            <div class="col text-end">
                                <div class="dropdown">
                                    <button class="btn btn-success btn-lg dropdown-toggle rounded-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Berdasarkan Kota/Kabupaten
                                    </button>
                                    <ul class="dropdown-menu">
                                        <!-- PAPUA -->
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kota Jayapura" target="_blank">Kota Jayapura</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Jayapura" target="_blank">Kabupaten Jayapura</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Keerom" target="_blank">Kabupaten Keerom</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Sarmi" target="_blank">Kabupaten Sarmi</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Biak Numfor" target="_blank">Kabupaten Biak Numfor</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Kepulauan Yapen" target="_blank">Kabupaten Biak Kepulauan Yapen</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Waropen" target="_blank">Kabupaten Waropen</a></li>

                                        <!-- PAPUA PEGUNUNGAN -->
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Yahukimo" target="_blank">Kabupaten Yahukimo</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Yalimo" target="_blank">Kabupaten Yalimo</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Puncak" target="_blank">Kabupaten Puncak</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Jayawijaya" target="_blank">Kabupaten Jayawijaya</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Lanny Jaya" target="_blank">Kabupaten Lanny Jaya</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Pegunungan Bintang" target="_blank">Kabupaten Pegunungan Bintang</a></li>

                                        <!-- PAPUA TENGAH -->
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Intan Jaya" target="_blank">Kabupaten Intan Jaya</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Nabire" target="_blank">Kabupaten Nabire</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Paniai" target="_blank">Kabupaten Paniai</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Mimika" target="_blank">Kabupaten Mimika</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Nabire" target="_blank">Kabupaten Nabire</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Dogiai" target="_blank">Kabupaten Dogiai</a></li>

                                        <!-- PAPUA SELATAN -->
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Merauke" target="_blank">Kabupaten Merauke</a></li>
                                        <li><a class="dropdown-item" href="admin-siswa.php?filter=Kabupaten Mappi" target="_blank">Kabupaten Mappi</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-bordered">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th width="1px" class="text-uppercase">No</th>
                                        <th width="100px" class="text-uppercase">Gambar</th>
                                        <th class="text-uppercase">Nama Lengkap</th>
                                        <th class="text-uppercase">Kota / Kabupaten</th>
                                        <th class="text-uppercase" colspan="2">NIK</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $no = 1;
                                    while ($user_data = mysqli_fetch_array($siswa_semua)) {
                                        echo "<tr>";
                                        echo "<td>" . $no++ . "</td>";
                                        echo "<td> <img src='./assets/images/photos/user.png' alt='Profile Picture' class='img-fluid'> </td>";
                                        echo "<td>" . $user_data['nama_lengkap'] . "</td>";
                                        echo "<td class='text-uppercase'>" . $user_data['kabkota'] . "</td>";
                                        echo "<td>" . $user_data['nik'] . "</td>";
                                        echo "<td>
                                                <a class='btn btn-sm btn-success rounded-0' href='".$user_data['folder_google_drive']."' target='_blank'>Folder Google Drive</a>  
                                                <a class='btn btn-sm btn-dark rounded-0' href='admin-siswa-detail.php?id=$user_data[id]'>Detail</a>  
                                                <a class='btn btn-sm btn-outline-dark rounded-0' href='admin-siswa-edit.php?id=$user_data[id]'>Edit</a>  
                                                <a class='btn btn-sm btn-outline-danger rounded-0' href='config/siswa/hapus.php?id=$user_data[id]' data-bs-toggle='modal' data-bs-target='#siswa-$user_data[id]'>Delete</a>
                                              </td>
                                              </tr>
                                              
                                              

                                              <div class='modal fade' id='siswa-$user_data[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h1 class='modal-title fs-5' id='exampleModalLabel'>Yakin ingin menghapus data berikut?</h1>
                                                        <button type='button' class='btn-close rounded-0' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                        " . $user_data['nama_lengkap'] . "
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary rounded-0' data-bs-dismiss='modal'>Close</button>
                                                        <form action='./config/siswa/hapus.php' method='post'>
                                                            <input type='hidden' name='id' value='$user_data[id]'>
                                                            <button type='submit' name='delete' class='btn btn-danger rounded-0'>Hapus</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
                                    }
                                    ?>


                                </tbody>
                            </table>


                        </div>
                        <!-- .table-responsive end -->

                    </div>
                    <!-- .card-body end -->
                </div>
                <!-- .card end -->
            </div>
            <!-- .col end -->
        </div>
        <!-- .row end -->

        <div class="row">
            <footer class="col-lg-6 mx-auto text-center text-secondary">
                <div>
                    <a href="https://sagufoundation.org" class="text-decoration-none link-secondary fw-bold">www.sagufoundation.org</a>
                </div>
                Copyright &copy; 2023 - All Right Reserved.
            </footer>
            <!-- .footer end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>