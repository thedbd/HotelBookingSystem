<?php

function db_connect()
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "app4";
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
