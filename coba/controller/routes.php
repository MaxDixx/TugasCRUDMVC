<?php
include_once 'config/static.php';
include_once 'controller/main.php';
include_once 'function/main.php';

Router::url('/', 'get', function () { return view('home'); });
Router::url('auth', 'get', 'AuthController::login');
Router::url('auth', 'get', 'AuthController::register');
Router::url('dashboard/logout', 'get', 'AuthController::logout');
Router::url('dashboard', 'get', 'DashboardController::index');

Router::url('login', 'post', 'AuthController::saveLogin');

?>