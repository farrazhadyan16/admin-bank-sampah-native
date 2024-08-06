<?php
require_once 'header.php';
require_once 'query.php';
require_once 'crud-konsesi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bank Sampah | Pembelian</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="./img/pm_favico.png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Ini Sidebar -->
        <?php include ("sidebar.php") ?>
        <!-- Batas Akhir Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ("top-bar.php") ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <header class=page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-life-buoy">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                                                    <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                                                    <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                                                    <line x1="14.83" y1="9.17" x2="18.36" y2="5.64"></line>
                                                    <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
                                                </svg>
                                            </div>
                                            " Knowledge Base ""
                                        </h1>
                                        <div class="page-header-subtitle">What are you looking for? Our knowledge base
                                            is
                                            here to help.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-header-search mt-4">
                                <div class="input-group input-group-joined">
                                    <input class="form-control" type="text" placeholder="Search..." aria-label="Search"
                                        autofocus="">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg></span>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-xl px-4">
                        <!-- Knowledge base category-->
                        <h2 class="mb-0 mt-5">Category Name</h2>
                        <hr class="mt-2 mb-4">
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Jenis Jenis Sampah</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-right flex-shrink-0 ms-4">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Explicabo totam excepturi temporibus ipsum sint magni earum, perspiciatis
                                        beatae dolorum maxime cum, officia ratione pariatur laudantium eveniet modi
                                        velit labore non.</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-right flex-shrink-0 ms-4">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Deleniti quae quam, adipisci in illum ratione placeat atque nulla,
                                        corporis repellendus unde id sunt, quidem eveniet blanditiis laborum hic nihil
                                        quia?</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-right flex-shrink-0 ms-4">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Repellendus in nam vero quaerat quam distinctio numquam est. Provident,
                                        velit animi nisi placeat aut facilis rerum corporis blanditiis quidem, officia
                                        ut.</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-right flex-shrink-0 ms-4">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing
                                        elit. In nobis deserunt consequatur facere veniam eius, reiciendis minus neque
                                        sequi modi fuga ratione quam maxime aliquam repellendus optio iure quasi animi!
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-right flex-shrink-0 ms-4">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base item-->
                        <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-article.html">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 card-title mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Quae architecto distinctio fuga harum tempora reiciendis porro ipsum,
                                        eaque dolorum fugiat debitis in dolorem modi officia quis ipsam vitae earum!
                                        Sit!</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-chevron-right flex-shrink-0 ms-4">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include ("footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <?php
    //cek apakah tombol sudah ditekan
    if (isset($_POST["submit"])) {

        //cek apakah data berhasil ditambahkan
        if (inputdatakonsesi($_POST) > 0) {
            echo "
            <script>  
                // Display success message using SweetAlert
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Data Berhasil Ditambahkan',
                    icon: 'success',
                    confirmButtonColor: '#4e73df'
                }).then(function() {
                    // Redirect to tables-konsesi.php after the alert is closed
                    window.location.href ='tables-konsesi.php';
                });
            </script>
        ";
        } else {
            echo "
				<script>  
					// Display success message using SweetAlert
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Data Gagal Ditambahkan',
                    icon: 'error'
                }).then(function() {
                    // Redirect to tables-konsesi.php after the alert is closed
                    window.location.href ='tables-konsesi.php';
                });
				</script>
				";
        }
    }
    ?>
</body>

</html>