<?php
ob_start();
include 'helper/FlashMessageHelper.php';
try {
    if (isset($_GET['a'])) {
        if ($_GET['a'] == "addRooms") {
            if (empty($_POST)) {
                include 'view/addRooms.php';
                return;
            }
        }
    }

    if (isset($_GET['a'])) {
        if ($_GET['a'] == "viewRooms") {
            if (empty($_POST)) {
                include 'view/viewRooms.php';
                return;
            }
        }
    }

    
}catch(Exception $ex){
    echo $ex;
}

ob_end_flush();
?>