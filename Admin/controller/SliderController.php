<?php
ob_start();
if (isset($_GET['a'])) {
    if ($_GET['a'] == "addSlider") {
        if (empty($_POST)) {
            include 'view/addSlider.php';
            return;
        }

        $slidertitle = $_POST['imagetitle'];
        $sliderdesc = $_POST['description'];

        $target = "";
        if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
            $filename = $_FILES['fileToUpload']['name']; // filename along with extension
            $newFileName = date('y_m_d_h_i_s_') . $filename;
            $tmpname = $_FILES['fileToUpload']['tmp_name'];
            $target = "resource/images/" . $newFileName;

            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
        }

        $addnewSlider = addSlider($slidertitle, $sliderdesc, $target);
        if ($addnewSlider) {
            $msg['title'] = 'Success!!';
            $msg['body'] = "successfully added Slider";
            $msg['type'] = 'success';
            setFlash('message', $msg);
            header("location:" . $base_url . "?p=home&a=viewSlider");
            return;
        } else {
            $msg['title'] = 'Info!!';
            $msg['body'] = "Cannot added Slider";
            $msg['type'] = 'danger';
            setFlash('message', $msg);
            header("location:" . $base_url . "?p=home&a=addSlider");
            return;

        }
    }
if (isset($_GET['a'])) {
    if ($_GET['a'] == "viewSlider") {
        include 'view/viewSlider.php';
        return;
    }
}

    if ($_GET['a'] == "deleteSlider") {

        if (isset($_GET['id'])) {
            $uid = $_GET['id'];
            $img = $_GET['img'];
            $deleteSliderPhoto = deleteSlider($uid);
            if ($deleteSliderPhoto) {
                if (file_exists($img)) {
                    unlink($img);
                }
                $error['body'] = 'Slider Deleted';
                $error['title'] = 'Info: ';
                $error['type'] = 'success';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewSlider");
            } else {
                $error['body'] = 'Unavlr to Delete Slider';
                $error['title'] = 'Info: ';
                $error['type'] = 'danger';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewSlider");
            }
        } else {

        }
        include 'view/viewSlider.php';
    }
}

ob_end_flush();