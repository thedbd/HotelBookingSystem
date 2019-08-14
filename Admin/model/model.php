<?php

function db_connect()
{$host = "remotemysql.com";
    $username = "pGqTRjw0q9";
    $password = "2yONMbjaDr";
    $database = "pGqTRjw0q9";

    //   $host = "localhost";
    //  $username = "root";
    //  $password = "";
    //  $database = "project";

    $conxn = mysqli_connect($host, $username, $password, $database) or die(mysqli_error($conxn));

// Check connection
    if ($conxn->connect_error) {
        die("Connection failed: " . $conxn->connect_error);
    }
    return $conxn;
}

function admin_login($username, $password)
{

    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password' ";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}
function view_admin()
{
    $admin = array();
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_users";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($admin, $row);
        }
        return $admin;
    } else {
        return false();
    }
}

function add_admin($name, $username, $email, $password, $phone, $type)
{
    $conxn = db_connect();
    $sql = "INSERT INTO tbl_users (name,username,email,password,mobileno,uType) VALUES ('$name','$username','$email','$password','$phone','$type')";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }
}

function delete_admin($uid)
{
    $conxn = db_connect();
    $sql = "DELETE FROM tbl_users WHERE userID='$uid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }
}
function changeAdminStatus($uid, $type)
{
    $sql = null;
    $conxn = db_connect();
    if ($type == 1) {
        $sql = "UPDATE tbl_users SET status='0' WHERE userID='$uid'";

    } else {
        $sql = "UPDATE tbl_users SET status='1' WHERE userID='$uid'";
    }
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }
}
function update_profileImage($uid, $target)
{
    $conxn = db_connect();
    //for profile update
    $sql = "UPDATE tbl_users SET image='$target' WHERE userID='$uid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    //for getting new updated image
    $sql1 = "SELECT image FROM tbl_users WHERE userID='$uid'";
    $result1 = mysqli_query($conxn, $sql1) or die(mysqli_error($conxn));

    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        $row = mysqli_fetch_assoc($result1);
        return $row;
    } else {
        return false;
    }

}

function viewTestimonials()
{
    $testimonials = array();
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_testimonials";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($testimonials, $row);
        }
        return $testimonials;
    } else {
        return false;
    }
}

function viewTestimonialsForActive()
{
    $testimonials = array();
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_testimonials WHERE status='1'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    return mysqli_num_rows($result);
}
function viewTestimonialsForInactive()
{
    $testimonials = array();
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_testimonials WHERE status='0'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    return mysqli_num_rows($result);
}

function deleteTestimonials($uid)
{
    $conxn = db_connect();
    $sql = "DELETE FROM tbl_testimonials WHERE tid='$uid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {

        return $result;
    } else {
        return false;
    }
}

function changeTestimonialStatus($uid, $type)
{
    $sql = null;
    $conxn = db_connect();
    if ($type == 1) {
        $sql = "UPDATE tbl_testimonials SET status='0' WHERE tid='$uid'";

    } else {
        $sql = "UPDATE tbl_testimonials SET status='1' WHERE tid='$uid'";
    }
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }

}

function view_gallery()
{
    $gallery = array();
    $conxn = db_connect();
    $sql = "Select * from tbl_gallery";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($gallery, $row);
        }
        return $gallery;
    } else {
        return false;
    }
}
function getGallery($gid)
{

    $conxn = db_connect();
    $sql = "Select * from tbl_gallery where gid='$gid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }

}
function editGallery($gid, $ititle, $des)
{
    $conxn = db_connect();
    $sql = "UPDATE tbl_gallery SET imagetitle='$ititle',description='$des' WHERE gid='$gid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }

}

function changeGalleryStatus($uid, $type)
{

    $sql = null;
    $conxn = db_connect();
    if ($type == 1) {
        $sql = "UPDATE tbl_gallery SET status='0' WHERE gid='$uid'";
    } else {
        $sql = "UPDATE tbl_gallery SET status='1' WHERE gid='$uid'";
    }
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }

}
function add_new_gallery($Iname, $Des, $target)
{
    $conxn = db_connect();
    $sql = "INSERT INTO tbl_gallery(imagetitle,description,image)values('$Iname','$Des','$target')";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {

        return $result;
    } else {
        return false;
    }
}
function deleteGalleryPhoto($uid)
{
    $conxn = db_connect();

    $sql = "delete from tbl_gallery where gid='$uid'";

    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {

        return $result;
    } else {
        return false;
    }
}

function service_view($sid)
{
    $service = array();
    $conxn = db_connect();
    if (isset($sid)) {
        $sql = "Select * from tbl_services where sid='$sid'";
    } else {
        $sql = "Select * from tbl_services";
    }
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($service, $row);
        }
        return $service;
    } else {
        return false;
    }
}

function service_add($title, $description, $icon)
{
    $conxn = db_connect();
    $stmt = $conxn->prepare("INSERT INTO tbl_services(title,description,icon) values(?,?,?)");
    $stmt->bind_param('sss', $title, $description, $icon);
    $result = $stmt->execute();
    mysqli_close($conxn);
    if ($result) {
        $stmt->close();

        return $result;
    } else {
        $stmt->close();

        return false;
    }

}

function service_edit($sid, $title, $description, $icon)
{
    $conxn = db_connect();
    $update = "Update tbl_services set title='$title', description='$description',icon='$icon' where sid='$sid'";
    $result = $conxn->query($update);
    mysqli_close($conxn);
    if ($result) {
        return $conxn;
    } else {
        $conxn->close();
        return false;
    }
}

function delete_service($sid)
{
    $conxn = db_connect();
    $sql = "DELETE FROM tbl_services WHERE sid='$sid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }
}

function addPages($pname, $plink, $title, $metaKeywords, $metaDesc, $pType, $pDesc)
{
    $conxn = db_connect();
    $sql = "INSERT INTO tbl_pages (pName,link,title,metaKeyword,metaDesc,pageDesc,type) VALUES ('$pname','$plink','$title','$metaKeywords','$metaDesc','$pDesc','$pType')";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }

}

function add_new_room($rname, $Des, $fea, $price, $target)
{
    $conxn = db_connect();
    $sql = "INSERT INTO tbl_rooms(rname,rdescription,rfeatures,rprice,image)values('$rname','$Des','$fea','$price','$target')";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {

        return $result;
    } else {
        return false;
    }
}

function view_rooms($rid)
{
    $rooms = array();
    $conxn = db_connect();
    if (isset($rid)) {
        $sql = "select * from tbl_rooms where rid='$rid'";
    } else {
        $sql = "Select * from tbl_rooms";
    }
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($rooms, $row);
        }
        return $rooms;
    } else {
        return false;
    }
}

function changeRoomStatus($uid, $type)
{

    $sql = null;
    $conxn = db_connect();
    if ($type == 1) {
        $sql = "UPDATE tbl_rooms SET status='0' WHERE rid='$uid'";
    } else {
        $sql = "UPDATE tbl_rooms SET status='1' WHERE rid='$uid'";
    }
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }
}

function deleteRoom($uid)
{
    $conxn = db_connect();

    $sql = "delete from tbl_rooms where rid='$uid'";

    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {

        return $result;
    } else {
        return false;
    }
}

function editRooms($rid, $rname, $des, $fea, $rprice)
{
    $conxn = db_connect();
    $update = "Update tbl_rooms set rname='$rname', rdescription='$des',rfeatures='$fea',rprice='$rprice' where rid='$rid'";
    $result = $conxn->query($update);
    mysqli_close($conxn);
    if ($result) {
        return $conxn;
    } else {
        $conxn->close();
        return false;
    }
}
function addSlider($title, $desc, $target)
{
    $conxn = db_connect();
    $sql = "INSERT INTO tbl_slider (sliderImg,sliderTitle,sliderDesc)values('$target','$title','$desc')";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {
        return true;
    } else {
        return false;
    }
}
function viewSlider()
{
    $slider = array();
    $conxn = db_connect();
    $sql = "Select * from tbl_slider";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($slider, $row);
        }
        return $slider;
    } else {
        return false;
    }
}
function deleteSlider($uid)
{
    $conxn = db_connect();
    $sql = "delete from tbl_slider where sliderId='$uid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {
        return true;
    } else {
        return false;
    }
}
function getSlider($gid)
{
    $conxn = db_connect();
    $sql = "Select * from tbl_slider where sliderId='$gid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}
function editSlider($gid, $ititle, $des)
{
    $conxn = db_connect();
    $sql = "UPDATE tbl_slider SET sliderTitle='$ititle',sliderDesc='$des' WHERE sliderId='$gid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }
}

function blogpost_view($bid)
{
    $blogpost = array();
    $conxn = db_connect();
    if (isset($bid)) {
        $sql = "Select * from tbl_blogpost where bid='$bid'";
    } else {
        $sql = "Select * from tbl_blogpost";
    }
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($blogpost, $row);
        }
        return $blogpost;
    } else {
        return false();
    }
}

function addBlogPost($title, $description, $postedby, $posted_date, $lastUpdate, $target, $status)
{
    $conxn = db_connect();
    $sql = "INSERT INTO tbl_blogpost (title,description,posted_by,posted_date,last_update,image,status)values('$title', '$description','$postedby','$posted_date','$lastUpdate','$target','$status')";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    mysqli_close($conxn);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function delete_blogpost($bid)
{
    $conxn = db_connect();
    $sql = "DELETE FROM tbl_blogpost WHERE bid='$bid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    $affRows = mysqli_affected_rows($conxn);
    if ($affRows > 0) {
        return true;
    } else {
        return false;
    }
}

function blogpost_edit($bid, $title, $description, $postedby, $d, $target)
{
    $conxn = db_connect();
    $update = "Update tbl_blogpost set title='$title', description='$description', posted_by='$postedby',last_update = '$d',image='$target' where bid='$bid'";
    $result = $conxn->query($update);

    if ($result) {
        return $conxn;
    } else {
        $conxn->close();
        return false;
    }
}

function getRegGuests()
{
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_guests";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    return mysqli_num_rows($result);
}