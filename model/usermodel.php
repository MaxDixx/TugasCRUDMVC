<?php
require_once 'config/conn.php';

class User {
    static function login($data=[]) {
        extract($data);
        global $conn;

        $result = $conn->query("SELECT * FROM akun WHERE username = '$username'");
        if ($result = $result->fetch_assoc()) {
            
            if ($result) { return $result; }
            else { return false; }
        }
        else { return false; }
    }

    static function register($data=[]) {
        extract($data);
        global $conn;
        
        $usernamesignup = strtolower($usernamesignup);
        $nama = strtolower($nama);
        $sql = "INSERT INTO akun SET username = ?, Nama = ?, passwd = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $usernamesignup, $nama, $password);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    }

    static function getPassword($username) { 
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
?>