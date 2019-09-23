<?php
ob_start();
include 'helper/FlashMessageHelper.php';
try
{
    
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
        $title = $_POST['ptitle'];
        $addPages = addPages($pname, $plink, $title, $metaKeywords, $metaDesc, $pType, $pDesc);
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

    if ($_GET['a'] == "viewPages") {
        include 'view/viewPages.php';

    }
 
    if ($_GET['a'] == "deletePage") {
    
        $pid = $_GET['id'];
        $deletePage = deletePage($pid);
        if ($deletePage) {
          	    $error['body'] = 'Page Deleted';
                $error['title'] = 'Info: ';
                $error['type'] = 'success';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewPages");
        } else {
           		 $error['body'] = 'Unable to Delete Page';
                $error['title'] = 'Info: ';
                $error['type'] = 'danger';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewPages");
        }
    } 
    
    if ($_GET['a'] == "editPages") {
        if (empty($_POST)) {
            include 'view/editPages.php';
            return;
        }

        $pid = $_GET['id'];
        $pname = $_POST['pname'];
        $metaKeywords = $_POST['mKey'];
        $metaDesc = $_POST['mDesc'];
        $pType = $_POST['type'];
        $plink = "?p=" . strtolower($pType);
        $pDesc = $_POST['description'];
        $title = $_POST['ptitle'];

        $editPages = editPages($pid, $pname, $metaKeywords,$metaDesc,$pType,$plink,$pDesc,$title);
        if ($editPages) {
            $error['body'] = 'Page Updated';
            $error['title'] = 'Info: ';
            $error['type'] = 'success';
            setFlash('message', $error);
            header("location: $base_url?p=home&a=viewPages");
        } else {
            $error['body'] = 'Unable to Update Page';
            $error['title'] = 'Info: ';
            $error['type'] = 'danger';
            setFlash('message', $error);
            header("location: $base_url?p=home&a=viewPages");

        }
    }
}

}catch(Exception $ex)
{
    echo $ex;
}


ob_end_flush();
?>