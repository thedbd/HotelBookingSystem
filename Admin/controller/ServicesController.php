<?php
ob_start();
include 'helper/FlashMessageHelper.php';
try {
    if (isset($_GET['a'])) {
        if ($_GET['a'] == "addServices") {
            if (empty($_POST)) {
                include 'view/addServices.php';
                return;
            }
            if (empty($_POST['title']) || empty($_POST['description'])) {
                $error['body'] = 'Title and Description are Required';
                $error['title'] = 'Info: ';
                $error['type'] = 'warning';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewServices");
                return;
            }
            $title = $_POST['title'];
            $description = $_POST['description'];
            $service = service_add($title, $description);
            if ($service) {
                $error['body'] = 'Service Added Successfully!';
                $error['title'] = 'Info: ';
                $error['type'] = 'success';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewServices");
                return;
            } else {
                $error['body'] = 'Service Couldnot Added Successfully!';
                $error['title'] = 'Info: ';
                $error['type'] = 'warning';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewServices");
                return;
            }
        }

        if ($_GET['a'] == "deleteServices") {
            $sid = $_GET['id'];
            $deleteService = delete_service($sid);
            if ($deleteService) {
                $error['body'] = 'Service Deleted Successfully!';
                $error['title'] = 'Info: ';
                $error['type'] = 'success';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewServices");
            } else {
                $error['body'] = 'Service Couldnot Deleted Successfully!';
                $error['title'] = 'Info: ';
                $error['type'] = 'warning';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewServices");

            }
            return;
        }

        if ($_GET['a'] == "viewServices") {
            include 'view/viewServices.php';
            return;
        }

        if ($_GET['a'] == "editServices") {
            if (empty($_POST)) {
                include 'view/editServices.php';
                return;
            }
            $sid = $_GET['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $service = service_edit($sid, $title, $description);
            if ($service) {
                $error['body'] = 'Service Updated Successfully!';
                $error['title'] = 'Info: ';
                $error['type'] = 'success';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewServices");
            } else {
                $error['body'] = 'Service Couldnot Updated Successfully!';
                $error['title'] = 'Info: ';
                $error['type'] = 'warning';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewServices");

            }

        } else {
            include 'view/viewServices.php';
            return;
        }
    }
} catch (Exception $ex) {
    echo $ex;
}

ob_end_flush();