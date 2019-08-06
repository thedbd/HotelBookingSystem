<?php
ob_start();
include 'helper/adminSessionHelper.php';
include 'helper/FlashMessageHelper.php';
include 'view/headerforhome.php';
include 'view/nav.php';
include 'model/model.php';

include 'view/dashboard.php';

if (isset($_GET['a'])) {
    $action = $_GET['a'];
    switch ($action) {
        case 'addAdmin':
            include 'controller/AdminController.php';
            break;
        case 'viewAdmin':
            include 'controller/AdminController.php';
            break;
        case 'deleteAdmin':
            include 'controller/AdminController.php';
            break;
        case 'viewProfile':
            include 'controller/ProfileController.php';
            break;
        case 'updateProfile':
            include 'controller/ProfileController.php';
            break;
        case 'viewTestimonials':
            include 'controller/TestimonialsController.php';
            break;
        case 'deleteTestimonials':
            include 'controller/TestimonialsController.php';
            break;
        case 'addServices':
            include 'controller/ServicesController.php';
            break;
        case 'viewServices':
            include 'controller/ServicesController.php';
            break;
        case 'deleteServices':
            include 'controller/ServicesController.php';
            break;
        case 'editServices':
            include 'controller/ServicesController.php';
            break;
        case 'addPages':
            include 'controller/PageController.php';
            break;
        default:
            // throwError(404, 'Requested page does not exists.');
            break;

    }
    include 'view/footer.php';
    return;
} else {

}
include 'view/footer.php';
ob_end_flush();