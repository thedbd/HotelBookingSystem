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
        <div class="form-group">
            <small id="titleHelp" class="form-text text-muted">Services Icon</small>
            <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"
                class="btn btn-primary btn-sm float-left mt-2 mb-2">Get it from here</a>
            <input type="text" class="form-control form-control-user" id="" name="icon" required
                value="<?php echo $result['icon']; ?>" placeholder="Paste Icon Name Here">

        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php
}
?>
</body>

</html>