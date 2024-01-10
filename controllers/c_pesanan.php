<?php

include_once "c_koneksi.php";

class c_pesanan {
    public function  insert($id, $menu, $harga, $jumlah, $photo, $status) {
        $conn = new c_koneksi();
        $query = "INSERT INTO pesanan VALUES ('$id', '$menu', '$harga', '$jumlah', '$photo', '$status')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read() {
        $conn = new c_koneksi();
        $query = "SELECT * FROM pesanan ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        if (!empty($rows)) {
            return $rows;
        }
    }

    public function edit($id) {
        $conn = new c_koneksi();
        $query = "SELECT * FROM pesanan WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }return $rows;
    }

    public function update($id, $menu, $harga, $jumlah, $photo, $status) {
        $conn = new c_koneksi();
        $query = "UPDATE pesanan SET menu='$menu', harga='$harga', jumlah='$jumlah', photo='$photo', status='$status' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function delete($id) {
        $conn = new c_koneksi();
        $query = "DELETE FROM pesanan WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function status($id, $status) {
        $conn =  new c_koneksi();
        $data = mysqli_query($conn->conn(), "UPDATE pesanan SET status='$status' WHERE id = $id");
    }
}