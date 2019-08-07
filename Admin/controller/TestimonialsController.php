<?php
ob_start();
if (isset($_GET['a'])) {
    if ($_GET['a'] == "viewTestimonials") {
        if (isset($_GET['id'])) {
            $uid = $_GET['id'];
            $type = $_GET['type'];
            if ($type == 1 or $type == 0) {
                $changeTestimonialStatus = changeTestimonialStatus($uid, $type);
                if ($changeTestimonialStatus) {
                    $error['body'] = 'Testimonials Status Changed!';
                    $error['title'] = 'Info: ';
                    $error['type'] = 'success';
                    setFlash('message', $error);
                    header("location: $base_url?p=home&a=viewTestimonials");

                } else {
                    $error['body'] = 'Unable to Change Testimonials Status';
                    $error['title'] = 'Info: ';
                    $error['type'] = 'danger';
                    setFlash('message', $error);
                    header("location: $base_url?p=home&a=viewTestimonials");

                }
            } else {

            }

        }

        include 'view/viewTestimonials.php';
    }
    if ($_GET['a'] == "deleteTestimonials") {

        if (isset($_GET['id'])) {
            $uid = $_GET['id'];

            $delete_Testimonials = deleteTestimonials($uid);
            if ($delete_Testimonials) {

            } else {

            }
        } else {

        }
        include 'view/viewTestimonials.php';
    }

}