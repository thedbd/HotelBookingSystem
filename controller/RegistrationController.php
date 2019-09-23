<?php
include 'helper/FlashMessageHelper.php';

if (isset($_GET['p'])) {
    if ($_GET['p'] == "registration") {
       if (empty($_POST)) {
            include 'view/reg.php';
            return;
       }
     if (isset($_POST)) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $name = $fname . " " . $lname;
            $email = $_POST['email'];
            $password = sha1($_POST['pass']);
            $phone = $_POST['phone'];
            $country = $_POST['country'];
             $guestReg = guestReg($name, $email,$password,$phone,$country);
        if ($guestReg) {
            $error['body'] = 'Registered successfully!';
            $error['title'] = 'Info: ';
            $error['type'] = 'info';
            setFlash('message', $error);
            header("location:" . $base_url . "u/?p=login");
        } else {
            $error['body'] = 'Can not registered successfully';
            $error['title'] = 'Info: ';
            $error['type'] = 'danger';
            setFlash('message', $error);
            include 'view/registration.php';
            return;
        }

     }
    }
}