<?php

function db_connect()
{
    $host = "remotemysql.com";
    $username = "pGqTRjw0q9";
    $password = "2yONMbjaDr";
    $database = "pGqTRjw0q9";

    // $host = "localhost";
    //  $username = "root";
    // $password = "";
    //   $database = "app4";
    $conxn = mysqli_connect($host, $username, $password, $database) or die(mysqli_error($conxn));

// Check connection
    if ($conxn->connect_error) {
        die("Connection failed: " . $conxn->connect_error);
    }
    return $conxn;
}

function pageInfo($type)
{
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_pages WHERE type='$type'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }

}
function viewPages()
{
    $conxn = db_connect();
    $pages = array();
    $sql = "SELECT * FROM tbl_pages WHERE status='1'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($pages, $row);
        }
        return $pages;
    } else {
        return false;
    }
}
function viewTestimonials()
{
    $conxn = db_connect();
    $testimonials = array();
    $sql = "SELECT * FROM tbl_testimonials WHERE status='1'";
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
function viewServices($limit)
{
    $sql = null;
    if ($limit == 0) {
        $sql = "SELECT * FROM tbl_services LIMIT 3";
    } else {
        $sql = "SELECT * FROM tbl_services";

    }
    $conxn = db_connect();
    $services = array();
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($services, $row);
        }
        return $services;
    } else {
        return false;
    }

}
function viewGallery()
{
    $conxn = db_connect();
    $gallery = array();
    $sql = "SELECT * FROM tbl_gallery WHERE status='1'";
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
function guestsLogin($email, $password)
{
    $enpassword = sha1($password);
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_guests WHERE gEmail = '$email' AND gPassword = '$enpassword' ";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }
}

function viewAccomodation()
{
    $conxn = db_connect();
    $accomodation = array();
    $sql = "SELECT * FROM tbl_rooms WHERE status='1'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($accomodation, $row);
        }
        return $accomodation;
    } else {
        return false;
    }

}
function getAccomodation($rid)
{
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_rooms WHERE rid='$rid'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }

}
function getSlider()
{
    $conxn = db_connect();
    $slider = array();
    $sql = "SELECT * FROM tbl_slider";
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
function viewBlogpost($limit)
{
    $conxn = db_connect();
    $blogpost = array();
    $sql;
    if ($limit == 0) {
        $sql = "SELECT * FROM tbl_blogpost ORDER BY bid DESc";

    } else {
        $sql = "SELECT * FROM tbl_blogpost ORDER BY bid DESC limit 3";

    }

    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($blogpost, $row);
        }
        return $blogpost;
    } else {
        return false;
    }
}

function viewRoom()
{
    $conxn = db_connect();
    $room = array();
    $sql = "SELECT * FROM tbl_rooms WHERE status='1'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($room, $row);
        }
        return $room;
    } else {
        return false;
    }

}

function getBlog($id)
{
    $conxn = db_connect();
    $sql = "SELECT * FROM tbl_blogpost WHERE bid='$id'";
    $result = mysqli_query($conxn, $sql) or die(mysqli_error($conxn));
    mysqli_close($conxn);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        return false;
    }

}