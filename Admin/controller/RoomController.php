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
            $rname = $_POST['rname'];
             $Des = $_POST['rdescription'];
             $fea = $_POST['rfeatures'];
             $price = $_POST['rprice'];

             $target = "";
        if (!empty($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
            $filename = $_FILES['fileToUpload']['name']; // filename along with extension
            $newFileName = date('y_m_d_h_i_s_') . $filename;
            $tmpname = $_FILES['fileToUpload']['tmp_name'];
            $target = "resource/images/" . $newFileName;

            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
        }$addnewroom = add_new_room($rname, $Des, $fea,$price, $target);
        if ($addnewroom) {
            $msg['title'] = 'Success!!';
            $msg['body'] = "successfully added room";
            $msg['type'] = 'success';
            setFlash('message', $msg);
            header("location:" . $base_url . "?p=home&a=viewRooms");
            return;
        } else {
            $msg['title'] = 'Info!!';
            $msg['body'] = "Cannot added gallery";
            $msg['type'] = 'danger';
            setFlash('message', $msg);
            header("location:" . $base_url . "?p=home&a=addRooms");
            return;

        }

        }
    }

    if ($_GET['a'] == "viewRooms") {
        if (isset($_GET['id'])) {
            $uid = $_GET['id'];
            $type = $_GET['type'];
            if ($type == 1 or $type == 0) {
                $changeRoomStatus = changeRoomStatus($uid, $type);
                if ($changeRoomStatus) {
                    $error['body'] = 'Room Status Changed!';
                    $error['title'] = 'Info: ';
                    $error['type'] = 'success';
                    setFlash('message', $error);
                    header("location: $base_url?p=home&a=viewRooms");

                } else {
                    $error['body'] = 'Unable to Change Room Status';
                    $error['title'] = 'Info: ';
                    $error['type'] = 'danger';
                    setFlash('message', $error);
                    header("location: $base_url?p=home&a=viewRooms");
                }
            } else {
                
            }
        }
        include 'view/viewRooms.php';
    }

    if ($_GET['a'] == "deleteRoom") {

        if (isset($_GET['id'])) {
            $uid = $_GET['id'];
            $img = $_GET['img'];
            $dltRoom = deleteRoom($uid);
            if ($dltRoom) {
                if (file_exists($img)) {
                    unlink($img);
                }
                $error['body'] = 'Room Deleted';
                $error['title'] = 'Info: ';
                $error['type'] = 'success';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewRooms");
            } else {
                $error['body'] = 'Unable to Delete Room';
                $error['title'] = 'Info: ';
                $error['type'] = 'danger';
                setFlash('message', $error);
                header("location: $base_url?p=home&a=viewRooms");
            }
            } else {
        }
    
        include 'view/viewRooms.php';
    }
}catch(Exception $ex){
    echo $ex;
}

ob_end_flush();
?>