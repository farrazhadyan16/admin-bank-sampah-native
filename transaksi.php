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
                    <h1 class="h3 mb-2 text-gray-800">Form Pembelian </h1>
                    <p class="mb-4">Di Form ini akan melakukan transaksi pembelian sampah dari user.
                    </p>

                    <form method="POST" action="">

                        <div class="row">

                            <!-- Border Left -->
                            <div class="col">

                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">Id Nasabah</label>
                                        <div class="col">
                                            <input type="int" class="form-control" placeholder="Masukkan No"
                                                name="id_konsesi" required>
                                        </div>
                                        <br>
                                        <label class="control-label col-sm-4">Nama</label>
                                        <div class="col">
                                            <input type="int" class="form-control"
                                                placeholder="Otomatis Generate Nama setelah masukkan id/username nasabah"
                                                name="id_konsesi" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">Jenis Sampah</label>
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Masukkan JO" name="jo"
                                                required>
                                        </div>
                                        <br>
                                        <label class="control-label col-sm-4">Berat</label>
                                        <div class="col">
                                            <input type="int" class="form-control" placeholder="Masukkan No"
                                                name="id_konsesi" required>
                                        </div>
                                        <br>
                                        <label class="control-label col-sm-4">Harga/gr</label>
                                        <div class="col">
                                            <input type="int" class="form-control"
                                                placeholder="Otomatis Generate Harga dari database" name="id_konsesi"
                                                required>
                                        </div>
                                        <br>
                                        <label class="control-label col-sm-4">Total</label>
                                        <div class="col">
                                            <input type="int" class="form-control"
                                                placeholder="Otomatis Generate hasil dari penjualan diatas"
                                                name="id_konsesi" required>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light"
                                id="btn-submit">Simpan</button>
                        </div>
                        <input type="hidden" name="action" id="action" value="event_dialog_add_newpartnerdata" required>
                    </form>

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