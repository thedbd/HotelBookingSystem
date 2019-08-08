<?php
include 'helper/FlashMessageHelper.php';
if (isset($_GET['p'])) {
    if ($_GET['p'] == "login") {
        if (empty($_POST)) {
            include 'view/login.php';
            return;
        }
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $guest = guestsLogin($email,$pass);
        if($guest){
 $_SESSION['guest']['login'] = true;
        $_SESSION['guest']['guest_ID'] = $user['gID'];
        $_SESSION['guest']['guest_name'] = $user['gName'];
        $_SESSION['guest']['guest_email'] = $user['gEmail'];
        $error['body'] = 'logged in successfully !';
        $error['title'] = 'Info: ';
        $error['type'] = 'info';
        setFlash('message', $error);
        header("location:" . $base_url . "?p=reservation");
    } else {
        $error['body'] = 'No user found with given email and password.';
        $error['title'] = 'Info: ';
        $error['type'] = 'danger';
        setFlash('message', $error);
        include 'view/login.php';
        return;
    }
    }
}
    ?>