<?php

include_once "../controllers/c_pesanan.php";
$pesanan = new c_pesanan();


if ($_GET['aksi'] == 'insert') {
    $id = $_POST['id'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];

    $cek = array('png', 'jpg');
    $photo = $_FILES["photo"]["name"];

    $x = explode('.', $photo);

    $ekstensi = strtolower(end($x));

    $ukuran = $_FILES["photo"]["size"];

    $tmp = $_FILES["photo"]["tmp_name"];

    if (in_array($ekstensi, $cek) == true) {
        if ($ukuran <= 1044070) {
            move_uploaded_file($tmp, '../assets/img/' . $photo);
            $pesanan->insert($id, $menu, $harga, $jumlah, $photo, $status);
            if ($pesanan) {
                echo "<script> alert('Data berhasil di tambahkan!');
                document.location.href = '../views/data_kasir.php';
                </script>";
            }
        } else {
            echo "<script> alert('ukuran file terlalu besar')</script>";
        }
    } else {
        echo "<script> alert('Tolong masukan file dengan ekstensi (png / jpg)')</script>";
    }
} elseif ($_GET['aksi'] == 'update') {
    $id = $_POST['id'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];

    $cek = array('png', 'jpg', '');
    $photo = $_FILES["photo"]["name"];

    $x = explode('.', $photo);

    $ekstensi = strtolower(end($x));

    $ukuran = $_FILES["photo"]["size"];

    $tmp = $_FILES["photo"]["tmp_name"];

    if (in_array($ekstensi, $cek) == true) {
        if ($ukuran <= 1044070) {
            move_uploaded_file($tmp, '../assets/img/' . $photo);
            $pesanan->update($id, $menu, $harga, $jumlah, $photo, $status);
            if ($pesanan) {
                echo "<script> alert('Data berhasil di tambahkan!');
                document.location.href = '../views/data_admin.php';
                </script>";
            }
        } else {
            echo "<script> alert('ukuran file terlalu besar')</script>";
        }
    } else {
        echo "<script> alert('Tolong masukan file dengan ekstensi (png / jpg)')</script>";
    }
} elseif ($_GET['aksi'] == 'delete') {
    $id = $_GET['id'];

    $pesanan->delete($id);
    header("Location: ../views/data_admin.php");
} elseif ($_GET['aksi'] == 'status') {
    $id = $_GET['id'];
    $status = 'finish';

    $pesanan->status($id, $status);
    echo "<script> alert('Data berhasil di tambahkan!');
                document.location.href = '../views/data_kasir.php';
                </script>";
}
