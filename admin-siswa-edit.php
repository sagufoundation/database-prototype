<?php require_once('config/siswa/detail.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database - SAGU Foundation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row mb-3">

                            <div class="col-lg-10">
                                <h1 class="fw-bold">Ubah Siswa</h1>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur optio, quidem, placeat iste vero rem maxime beatae fugit voluptate provident quam est consequatur ea numquam quae odio dolores aperiam sequi.</p>
                            </div>

                            <div class="col-lg-2 text-end">
                                <a href="./admin-siswa.php" class="btn btn-lg btn-outline-dark rounded-0"><i class="fa-solid fa-times-rectangle me-1"></i> Close</a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-2 mb-5">

                                <h3 class="fw-bold">Picture</h3>    

                                <img src="./assets/images/photos/user.png" alt="Profile Picture" class="img-thumbnail w-100 mb-lg-3 p-lg-5">

                                <div>
                                    <a href="#" class="btn btn-sm btn-link-dark w-100" title="Update Picture"><i class="fa-solid fa-edit"></i> Update Picture</a>
                                </div>

                            </div>

                            <div class="col-lg-5 mb-5">

                                <h3 class="fw-bold">Bio</h3>                                
                                
                                <form action="./config/siswa/ubah.php" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="id" value="<?=$id?>">

                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="nama_lengkap" class="fw-bold form-label">Nama Lengkap :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="nama_lengkap" name="nama_lengkap" value="<?=$nama_lengkap?>">
                                        </li>
                                        <li class="list-group-item">
                                            <label for="nik" class="fw-bold form-label">NIK :</label> 
                                            <input type="text" class="form-control form-select-lg rounded-0" id="nik" name="nik" value="<?=$nik?>">
                                        </li>
                                        <!-- <li class="list-group-item">
                                            <label class="fw-bold form-label">Provinsi :</label> 
                                            <select name="provinsi" id="" class="form-select">
                                                <option hidden selected>Pilih</option>
                                                <option value="1">Papua</option>
                                                <option value="2">Papua Pengunungan</option>
                                                <option value="3">Papua Tengah</option>
                                                <option value="4">Papua Selatan</option>
                                            </select>
                                        </li>-->
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Kabupaten/Kota : </label> 
                                            <select name="kabkota" id="" class="form-select form-select-lg rounded-0">
                                                <option hidden selected>Pilih</option>
                                                <!-- PAPUA -->
                                                <option value="Kota Jayapura" <?php if($kabkota == 'Kota Jayapura') { echo 'Selected'; }?>>Kota Jayapura</option>
                                                <option value="Kabupaten Jayapura" <?php if($kabkota == 'Kabupaten Jayapura') { echo 'Selected'; }?>>Kabupaten Jayapura</option>
                                                <option value="Kabupaten Keerom" <?php if($kabkota == 'Kabupaten Keerom') { echo 'Selected'; }?>>Kabupaten Keerom</option>
                                                <option value="Kabupaten Sarmi" <?php if($kabkota == 'Kabupaten Sarmi') { echo 'Selected'; }?>>Kabupaten Sarmi</option> 
                                                <option value="Kabupaten Biak Numfor" <?php if($kabkota == 'Kabupaten Biak Numfor') { echo 'Selected'; }?>>Kabupaten Biak Numfor</option>
                                                <option value="Kabupaten Kepulauan Yapen" <?php if($kabkota == 'Kabupaten Kepulauan Yapen') { echo 'Selected'; }?>>Kabupaten Kepulauan Yapen</option> 
                                                <option value="Kabupaten Waropen" <?php if($kabkota == 'Kabupaten Waropen') { echo 'Selected'; }?>>Kabupaten Waropen</option> 

                                                <!-- PAPUA PEGUNUNGAN -->
                                                <option value="Kabupaten Yahukimo" <?php if($kabkota == 'Kabupaten Yahukimo') { echo 'Selected'; }?>>Kabupaten Yahukimo</option> 
                                                <option value="Kabupaten Yalimo" <?php if($kabkota == 'Kabupaten Yalimo') { echo 'Selected'; }?>>Kabupaten Yalimo</option> 
                                                <option value="Kabupaten Puncak" <?php if($kabkota == 'Kabupaten Puncak') { echo 'Selected'; }?>>Kabupaten Puncak</option> 
                                                <option value="Kabupaten Jayawijaya" <?php if($kabkota == 'Kabupaten Jayawijaya') { echo 'Selected'; }?>>Kabupaten Jayawijaya</option> 
                                                <option value="Kabupaten Lanny Jaya" <?php if($kabkota == 'Kabupaten Lanny Jaya') { echo 'Selected'; }?>>Kabupaten Lanny Jaya</option> 
                                                <option value="Kabupaten Pegunungan Bintang" <?php if($kabkota == 'Kabupaten Pegunungan Bintang') { echo 'Selected'; }?>>Kabupaten Pegunungan Bintang</option> 

                                                <!-- PAPUA TENGAH -->
                                                <option value="Kabupaten Intan Jaya" <?php if($kabkota == 'Kabupaten Intan Jaya') { echo 'Selected'; }?>>Kabupaten Intan Jaya</option> 
                                                <option value="Kabupaten Nabire" <?php if($kabkota == 'Kabupaten Nabire') { echo 'Selected'; }?>>Kabupaten Nabire</option> 
                                                <option value="Kabupaten Paniai" <?php if($kabkota == 'Kabupaten Paniai') { echo 'Selected'; }?>>Kabupaten Paniai</option> 
                                                <option value="Kabupaten Mimika" <?php if($kabkota == 'Kabupaten Mimika') { echo 'Selected'; }?>>Kabupaten Mimika</option> 
                                                <option value="Kabupaten Nabire" <?php if($kabkota == 'Kabupaten Nabire') { echo 'Selected'; }?>>Kabupaten Nabire</option> 
                                                <option value="Kabupaten Dogiai" <?php if($kabkota == 'Kabupaten Dogiai') { echo 'Selected'; }?>>Kabupaten Dogiai</option> 

                                                <!-- PAPUA SELATAN -->
                                                <option value="Kabupaten Merauke" <?php if($kabkota == 'Kabupaten Merauke') { echo 'Selected'; }?>>Kabupaten Merauke</option> 
                                                <option value="Kabupaten Mappi" <?php if($kabkota == 'Kabupaten Mappi') { echo 'Selected'; }?>>Kabupaten Mappi</option> 

                                            </select>
                                        </li> 
                                        <!-- <li class="list-group-item">
                                            <label class="fw-bold form-label">NIK :</label> 
                                            <input type="text" class="form-control" name="nik" value="90234090234">
                                        </li>
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Keterangan :</label> 
                                            <textarea name="" rows="10" class="form-control">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta, distinctio ex consequuntur voluptate non similique. Incidunt ratione harum vitae doloremque!</textarea>
                                        </li> -->
                                        <li class="list-group-item">
                                            <label for="folder_google_drive" class="fw-bold form-label">Folder Google Drive :</label> 
                                            <input type="text" class="form-control form-control-lg rounded-0" id="folder_google_drive" name="folder_google_drive" value="<?=$folder_google_drive?>">
                                        </li>
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-lg btn-dark rounded-0" name="edit">
                                                <i class="fa-solid fa-save"></i> Save
                                            </button>
                                            <!-- <a href="admin-student-trash.html" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-trash"></i></a> -->
                                        </li>
                                    </ul>

                                </form>

                            </div>
                        </div>

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
                    <a href="https://sagufoundation.org"
                        class="text-decoration-none link-secondary fw-bold">www.sagufoundation.org</a>
                </div>
                Copyright &copy; 2023 - All Right Reserved.
            </footer>
            <!-- .footer end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->

</body>

</html>