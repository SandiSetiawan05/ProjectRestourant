<?php

include "../controllers/c_login.php";


$halaman = "admin";

$data = $_SESSION['data'];
$id = $_SESSION['id'] = $data['id'];
$nama = $_SESSION['username'] = $data['username'];
$role = $_SESSION['role'] = $data['role'];
// $photo = $_SESSION['photo'] = $data['photo'];

include_once "template/header.php";
include_once "template/sidebar.php";

?>

<div class="container-fluid">

<h1 class="h1">Selamat datang <?= $nama ?></h1>

</div>
<!-- End of Page Wrapper --

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

<?php include_once "template/footer.php"; ?>

</html>