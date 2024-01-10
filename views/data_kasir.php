<?php include "../controllers/c_login.php";

include "../controllers/c_pesanan.php";
$baca = new c_pesanan();

// variabel yang berisi nilai tertentu untuk di cek di (sidebar)
$halaman = "data_kasir";

// perintah untuk menagmbil data sesi dari (c_login.php)
$data = $_SESSION['data'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];


include_once "template/header.php";
include_once "template/sidebar.php";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 m-0 font-weight-bold text-dark">Tabel</h1>
                <a href="tambah_pesanan.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pesanan</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pesanan</th>
                            <th>jumlah</th>
                            <th>harga</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pesanan</th>
                            <th>jumlah</th>
                            <th>harga</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php if (empty($baca->read())) { ?>
                            <!-- percabangan jika data kosong -->
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h1>DATA KOSONG!</h1>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?php } else {
                            $i = 1;
                            foreach ($baca->read() as $read) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $read->menu ?></td>
                            <td><?= $read->harga ?></td>
                            <td><?= $read->jumlah ?></td>
                            <td>
                                <img src="../assets/img/<?= $read->photo ?>" alt="" srcset="" width="70px" height="70px">
                            </td>
                            <td>
                                <?= $read->status ?>
                            </td>
                            <td>
                                <a href="../routers/r_pesanan.php?id=<?= $read->id ?>&aksi=status">Confirm</a>
                            </td>
                        </tr>
                        <?php endforeach;
                        } ?>



                        <!-- perulangan untuk array -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->

<?php include_once "template/footer.php" ?>