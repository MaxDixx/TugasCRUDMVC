<?php

include_once 'usermodel.php';

class DashboardController {
    static function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'auth?auth=false');
            exit;
        }
        else {
            view('dash_page/dashboard', ['transaksi' => Transaksi::select()]);
        }
    }
}
?>