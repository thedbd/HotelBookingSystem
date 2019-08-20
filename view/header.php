<!DOCTYPE html>
<html lang="en">

<head>
    <?php if (isset($_GET['p'])) {
    $type = $_GET['p'];
    $pages = pageInfo($type);
}
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $pages['metaDesc']; ?>">
    <meta name="keywords" content="<?php echo $pages['metaKeyword'];
?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>resource/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>resource/css/styles.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>resource/fontawesome/css/all.css">

    <title><?php echo $pages['title']; ?></title>
</head>

<body>