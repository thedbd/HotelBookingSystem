<?php
ob_start();
if (isset($_GET['a'])) {
    if ($_GET['a'] == "addGallery") {
        if (empty($_POST)) {
            include 'view/addGallery.php';
            return;
        }

        $Iname = $_POST['imagetitle'];
        $Des = $_POST['description'];

        $target = "";
        if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
            $filename = $_FILES['fileToUpload']['name']; // filename along with extension
            $newFileName = date('y_m_d_h_i_s_') . $filename;
            $tmpname = $_FILES['fileToUpload']['tmp_name'];
            $target = "resource/images/" . $newFileName;

            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
        }

        $addnewgallery = add_new_gallery($Iname, $Des, $target);
        if ($addnewgallery) {
            $msg['title'] = 'Success!!';
            $msg['body'] = "successfully added gallery";
            $msg['type'] = 'success';
            setFlash('message', $msg);
            header("location:" . $base_url . "?p=home&a=viewGallery");
            return;
        } else {
            $msg['title'] = 'Info!!';
            $msg['body'] = "Cannot added gallery";
            $msg['type'] = 'danger';
            setFlash('message', $msg);
            header("location:" . $base_url . "?p=home&a=addGallery");
            return;

        }
    }

    if ($_GET['a'] == "viewGallery") {
        if (isset($_GET['id'])) {
            $uid = $_GET['id'];
            $type = $_GET['type'];
            if ($type == 1 or $type == 0) {
                $changeGalleryStatus = changeGalleryStatus($uid, $type);
                if ($changeGalleryStatus) {
                    $error['body'] = 'Gallery Status Changed!';
                    $error['title'] = 'Info: ';
                    $error['type'] = 'success';
                    setFlash('message', $error);
                    header("location: $base_url?p=home&a=viewGallery");

                } else {
                    $error['body'] = 'Unable to Change Gallery Status';
                    $error['title'] = 'Info: ';
                    $error['type'] = 'danger';
                    setFlash('message', $error);
                    header("location: $base_url?p=home&a=viewGallery");
                }
            } else {

            }

        }

        include 'view/viewGallery.php';
    }

    if ($_GET['a'] == "deleteGallery") {

        if (isset($_GET['id'])) {
            $uid = $_GET['id'];
            $img = $_GET['img'];
            $deleteGalleryPhoto = deleteGalleryPhoto($uid);
            if ($deleteGalleryPhoto) {
                if (file_exists($img)) {
                    unlink($img);
                }
                $error['body'] = 'Gallery Deleted';
                $error['title'] = 'Info: ';
                $error['type'] = 'success';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewGallery");
            } else {
                $error['body'] = 'Unavlr to Delete Gallery';
                $error['title'] = 'Info: ';
                $error['type'] = 'danger';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewGallery");

            }
        } else {

        }
        include 'view/viewGallery.php';
    }

    if ($_GET['a'] == "editGallery") {
        if (empty($_POST)) {
            include 'view/editGallery.php';
            return;
        }
        $gid = $_GET['id'];
        $ititle = $_POST['imagetitle'];
        $des = $_POST['description'];
        $editGallery = editGallery($gid, $ititle, $des);
        if ($editGallery) {
            $error['body'] = 'Gallery Updated';
            $error['title'] = 'Info: ';
            $error['type'] = 'success';
            setFlash('message', $error);
            header("location: $base_url?p=home&a=viewGallery");
        } else {
            $error['body'] = 'Unable to Update Gallery';
            $error['title'] = 'Info: ';
            $error['type'] = 'danger';
            setFlash('message', $error);
            header("location: $base_url?p=home&a=viewGallery");

        }
    }

}
ob_end_flush();