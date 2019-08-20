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
        case 'viewPages':
            include 'controller/PageController.php';
            break;
        case 'deletePage':
            include 'controller/PageController.php';
            break;
        case 'editPages':
            include 'controller/PageController.php';
            break;
        case 'addRooms':
            include 'controller/RoomController.php';
            break;
         case 'viewRooms':
            include 'controller/RoomController.php';
            break;
        case 'editRooms':
            include 'controller/RoomController.php';
            break;
        case 'addGallery':
            include 'controller/GalleryController.php';
            break;
        case 'deleteRoom':
            include 'controller/RoomController.php';
            break;
        case 'viewGallery':
            include 'controller/GalleryController.php';
            break;
        case 'editGallery':
            include 'controller/GalleryController.php';
            break;
        case 'deleteGallery':
            include 'controller/GalleryController.php';
            break;
        case 'addSlider':
            include 'controller/SliderController.php';
            break;
            case 'deleteSlider':
            include 'controller/SliderController.php';
            break;
            case 'editSlider':
            include 'controller/SliderController.php';
            break;
        case 'viewSlider':
            include 'controller/SliderController.php';
            break;
        case 'addBlogPost':
            include 'controller/BlogPostController.php';
            break;
        case 'viewBlogPost':
            include 'controller/BlogPostController.php';
            break;
        case 'editBlogPost':
            include 'controller/BlogPostController.php';
            break;
        case 'deleteBlogPost':
            include 'controller/BlogPostController.php';
            break;
        case 'viewGuests':
            include 'controller/GuestController.php';
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