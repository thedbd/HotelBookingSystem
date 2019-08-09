<?php
ob_start();
if (isset($_GET['a'])) {
    if ($_GET['a'] == "addSlider") {
        if (empty($_POST)) {
            include 'view/addSlider.php';
            return;
        }
    }
}

if (isset($_GET['a'])) {
    if ($_GET['a'] == "viewSlider") {
        include 'view/viewSlider.php';
        return;
    }
}