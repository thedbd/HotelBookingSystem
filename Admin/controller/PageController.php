<?php
ob_start();
include 'helper/FlashMessageHelper.php';
if (isset($_GET['a'])) {
    if ($_GET['a'] == "addPages") {
        if (empty($_POST)) {
            include 'view/addPages.php';
            return;
        }
        $pname = $_POST['pname'];
        $metaKeywords = $_POST['mKey'];
        $metaDesc = $_POST['mDesc'];
        $pType = $_POST['type'];
        $plink = "?p=" . strtolower($pType);
        $pDesc = $_POST['description'];
        $addPages = addPages($pname, $plink, $metaKeywords, $metaDesc, $pType, $pDesc);
        if ($addPages) {
            $error['body'] = 'New page successfully added!';
            $error['title'] = 'Info: ';
            $error['type'] = 'success';
            setFlash('message', $error);
            header("location: $base_url?p=home&a=viewPages");
        } else {
            $error['body'] = 'Cannot add new page';
            $error['title'] = 'Info: ';
            $error['type'] = 'danger';
            setFlash('message', $error);
            header("location: $base_url?p=home&a=addPages");

        }

    }
}