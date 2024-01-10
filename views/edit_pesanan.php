<?php include "../controllers/c_login.php";

$data = $_SESSION['data'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];

// $profil = $_SESSION['profil'] = $data['profil'];
include "../controllers/c_pesanan.php";
$new = new c_pesanan();
include_once "template/header.php";
include_once "template/sidebar.php"; ?>

<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div style="text-align: right;">
        <a href="barang.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-minus"></i>
            </span>
            <span class="text">Tabel Data</span>
        </a>
    </div>
    <br>

    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold text-primary">Tambah Data Barang</h6>
            </div>
            <br>
            <form class="user" action="../routers/r_pesanan.php?aksi=update" method="post" enctype="multipart/form-data">
                <?php foreach($new->edit($_GET['id']) as $edit) : ?>
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" name="id" id="id" hidden value="<?= $edit->id ?>">
                    <div class="form-group ">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Menu" name="menu" value="<?= $edit->menu ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Harga" name="harga" value="<?= $edit->harga ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Jumlah" name="jumlah" value="<?= $edit->jumlah ?>">
                    </div>
                    <input type="file" name="photo" id="photo">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Tambah Data</button>
                </div>
                <?php endforeach; ?>
                <hr>
            </form>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->

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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php include_once "template/footer.php" ?>