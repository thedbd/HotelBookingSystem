<!DOCTYPE html>
<html>

<body>

    <?php
$sid = $_GET['id'];
$service = service_view($sid);
foreach ($service as $result) {
    ?>

    <form action="<?php echo $base_url . "?p=home&a=editServices&id=" . $result['sid']; ?>" method="POST">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" id="title" value="<?php echo $result['title']; ?>"
                aria-describedby="titleHelp" placeholder="Enter Title" required>
            <small id="titleHelp" class="form-text text-muted">Services title</small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea3">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea3" rows="7" required><?php echo $result['description']; ?>
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php
}
?>
</body>

</html>