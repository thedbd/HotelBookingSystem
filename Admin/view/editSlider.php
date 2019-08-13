<?php
$gid = $_GET['id'];
$result = getSlider($gid);
?>

<form action="<?php echo $base_url . '?p=home&a=editSlider&id=' . $result['sliderId']; ?>" method="POST">

    <div class="form-group row">
        <label for="inputimagename" class="col-sm-2 col-form-label">Slider Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="sliderTitle" value="<?php echo $result['sliderTitle']; ?>"
                placeholder="Enter Image Name">
        </div>
    </div>
    <div class="form-group row">
        <label for="description1" class="col-sm-2 col-form-label">Slider Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="sliderDesc" id="exampleFormControlTextarea3" rows="7"
                required><?php echo $result['sliderDesc']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
</body>

</html>