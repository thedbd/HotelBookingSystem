<?php
session_start();
include 'helper/SessionHelper.php';
$base_url = 'http://localhost/projects/App5/u/';
$_SESSION['base_url'] = $base_url;
include '../model/model.php';
//include '../view/header.php';
//include '../view/nav.php';
if (isset($_GET['p'])) {
    $controller = $_GET['p'];
    switch ($controller) {
        case 'dashboard':
            include 'controller/UserController.php';
            break;
        case 'profile':
            include 'controller/ProfileController.php';
            break;
        case 'logout':
            include 'controller/LogoutController.php';
            break;
        default:
            header("location: ?p=dashboard");

            // throwError(404, 'Requested page does not exists.');
            break;
    }
} else {
    header("location: ?p=dashboard");
}