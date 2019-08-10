<?php
session_start();
$base_url = 'http://localhost/projects/App5/';
$_SESSION['base_url'] = $base_url;
include 'model/model.php';
include 'view/header.php';
include 'view/nav.php';
if (isset($_GET['p'])) {
    $controller = $_GET['p'];
    $pages = pageInfo($controller);
    if ($pages['type'] == "home" || $controller == "login") {
    } else {
        ?>

<div class="container ">
    <h3 class="text-center mt-5"><?php echo $pages['pName']; ?></h3>
    <p class="text-center"><?php echo $pages['pageDesc']; ?></p>
    <hr width="300px" style="border:1px solid red;">

    <?php
}
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
        case 'accomodation':
            include 'controller/AccomodationController.php';
            break;
        case 'reservation':
            include 'controller/ReservationController.php';
            break;
        case 'login':
            include 'controller/LoginController.php';
            break;
        case 'contact':
            include 'controller/ContactController.php';
            break;
        case 'about':
            include 'controller/AboutController.php';
            break;
        default:
            // throwError(404, 'Requested page does not exists.');
            break;
    }
} else {
    header("location: ?p=home");
}
include 'view/footer.php';