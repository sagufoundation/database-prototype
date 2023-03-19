<?php
/**
 * using mysqli_connect for database connection
 */
 
    $databaseHost = 'localhost';
    $databaseName = 'database-beasiswa-sup';
    $databaseUsername = 'root';
    $databasePassword = '';
    
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

    $siswa_semua = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id DESC");
 
?>


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

    <!-- .container end -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row mb-3">

                            <div class="col-lg-10">
                                <h1>EDIT STDUENT DATA</h1>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur optio, quidem, placeat iste vero rem maxime beatae fugit voluptate provident quam est consequatur ea numquam quae odio dolores aperiam sequi.</p>
                            </div>

                            <div class="col-lg-2 text-end">
                                <a href="admin-student.html" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-times-rectangle me-1"></i> Close</a>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-2 mb-5">

                                <h3 class="fw-bold">Picture</h3>    

                                <img src="./assets/images/photos/1.png" alt="Profile Picture" class="img-thumbnail w-100 mb-lg-3 p-lg-5">

                                <div>
                                    <a href="#" class="btn btn-sm btn-link-dark w-100" title="Update Picture"><i class="fa-solid fa-edit"></i> Update Picture</a>
                                </div>

                            </div>

                            <div class="col-lg-5 mb-5">

                                <h3 class="fw-bold">Bio</h3>                                
                                
                                <form action="./admin-student-detail.html">

                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Full Name :</label> 
                                            <input type="text" class="form-control" value="Anastasia Febriani Yandong">
                                        </li>
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Email :</label> 
                                            <input type="text" class="form-control" value="ayandong@sagufoundation.org">
                                        </li>
                                        <li class="list-group-item">
                                            <label class="fw-bold form-label">Address :</label> 
                                            <textarea name="" rows="3" class="form-control">Jalan Raya Sentani, Kelurahan Waena, Kelurahan Heram, Kota Jayapura, Papua.</textarea>
                                        </li>
                                        <li class="list-group-item">
                                            <button type="submit" class="btn btn-sm btn-dark"><i class="fa-solid fa-save"></i> Save</button>
                                            <a href="admin-student-trash.html" class="btn btn-sm btn-outline-dark"><i class="fa-solid fa-trash"></i></a>
                                        </li>
                                    </ul>

                                </form>

                            </div>
                            <div class="col-lg-5" mb-5>

                                <h3 class="fw-bold">Documents</h3>

                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        Sponsor letter 
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                        
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        Offer letter
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        CoE
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        Tuition Payment Guide
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        Progress Report From SAGU
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        IELTS Result
                                        <div>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-download me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-dark p-0 px-2"><i class="fa-solid fa-eye me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-edit me-1"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-dark p-0 px-2"><i class="fa-solid fa-trash me-1"></i></a>
                                        </div>
                                    </li>
                                </ul>
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