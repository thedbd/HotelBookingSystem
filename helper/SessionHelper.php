<?php
if (!isset($_SESSION['guest']['login'])) {
    // $_SESSION['back_url'] = $_SERVER['HTTP_REFERER'];
    $type = $_GET['p'];
    header("location:" . $base_url . "?p=login&rf=$type");
    return;
}