<?php

require_once 'conn.php';

class User {
    static function login($data=[]) {
        extract($data);
        global $con;

        $sql = "SELECT * FROM akun WHERE username = ? AND passwd = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            return true;
        } else {
            return false;
        }
    }

    static function register($data=[]) {
        global $con;
        $nama = strtolower(stripslashes($data["nama"]));
        $username = strtolower(stripslashes($data["username-signup"]));
        $password = mysqli_real_escape_string($con, $data["password-signup"]);
        $password2 = mysqli_real_escape_string($con, $data["confirm-password"]);

        $result = mysqli_query($con,"SELECT username FROM akun WHERE username = '$username'");
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username sudah terdaftar!')</script>";
            return false;
        }

        if ($password != $password2) {
            echo "<script>alert('Konfirmasi Password Tidak Sesuai!')</script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        mysqli_query($con,"INSERT INTO akun VALUES( '$nama','$username','$password',0)");

        return mysqli_affected_rows($con);
    }

    static function getPassword($username) { 
        global $con;
        $sql = "SELECT password FROM akun WHERE username = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    static function update($data=[]) {}

    static function delete($id='') {}
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['passwd'])) {
        $username = htmlspecialchars($_POST['username']); 
        $password = htmlspecialchars($_POST['passwd']); 

        if (User::login(['username' => $username, 'password' => $password])) {
            header('Location: dashboard.php'); // Redirect to dashboard
            exit();
        } else {
            header('Location: index.php'); // Redirect to login page
            exit();
        }
    }
}

if (isset($_POST['nama']) && isset($_POST['username-signup']) && isset($_POST['password-signup']) && isset($_POST['confirm-password'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username-signup'];
    $password = $_POST['password-signup'];
    $password2 = $_POST['confirm-password'];

    if (User::register(['nama' => $nama, 'username-signup' => $username, 'password-signup' => $password, 'confirm-password' => $password2])) {
        header('Location: index.php'); // Redirect to login page
        exit();
    } else {
        echo "<script>alert('Registrasi gagal!')</script>";
        return false;
    }
}

?>