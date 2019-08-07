<?php
session_start();
$base_url = 'http://localhost/projects/App5/';
$_SESSION['base_url'] = $base_url;
include 'model/model.php';
include 'view/header.php';
include 'view/nav.php';
if (isset($_GET['p'])) {
    $controller = $_GET['p'];
    switch ($controller) {
        case 'home':
            include 'controller/HomeController.php';
            break;
        case 'services':
            include 'controller/ServicesController.php';
            break;
        case 'gallery':
            include 'controller/GalleryController.php';
            break;
        default:
            // throwError(404, 'Requested page does not exists.');
            break;
    }
} else {
    header("location: ?p=home");
}
include 'view/footer.php';