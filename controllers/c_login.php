<?php

session_start();
include_once "c_koneksi.php";

class c_login
{
    public function register($id = 0, $username, $email, $password, $role)
    {
        $conn = new c_koneksi();
        $query = "INSERT INTO user VALUES ($id, '$username', '$email', '$password', '$role')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function login($email, $password)
    {
        $conn = new c_koneksi();
        if (isset($_POST['login'])) {
            $query = "SELECT * FROM user WHERE email = '$email'";
            $sql = mysqli_query($conn->conn(), $query);
            $data = mysqli_fetch_assoc($sql);
            if ($data) {
                if (password_verify($password, $data['password'])) {
                    if ($data['role'] == 'admin') {
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                        header("Location: ../views/home_admin.php");
                        exit;
                    } elseif ($data['role'] == 'chef') {
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                        header("Location: ../views/home_chef.php");
                        exit;
                    } elseif ($data['role'] == 'kasir') {
                        $_SESSION['data'] = $data;
                        $_SESSION['role'] = $data['role'];

                        header("Location: ../views/home_kasir.php");
                        exit;
                    }
                }
            }
        }
    }

    public function logout() {
        session_destroy();

        header("Location: ../index.php");
    }
}
