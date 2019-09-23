<?php
session_start();
$base_url = 'http://localhost/projects/App5/Admin/';
$_SESSION['base_url'] = $base_url;
include 'view/header.php';

if (isset($_GET['p'])) {
    $controller = $_GET['p'];

    switch ($controller) {
        case 'login':
            $_SESSION['active_url'] = 'login';
            include 'controller/LoginController.php';
            break;
        case 'home':
            include 'controller/HomeController.php';
            break;

        case 'logout':
            include 'helper/logoutHelper.php';
            break;
        default:
            // throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/HomeController.php';
}