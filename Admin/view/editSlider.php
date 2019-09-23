<?php
$gid = $_GET['id'];
$result = getSlider($gid);
?>
<div class="container">
<form action="<?php echo $base_url . '?p=home&a=editSlider&id=' . $result['sliderId']; ?>" method="POST" class="user">

    <div class="form-group row">
        <label for="inputimagename" class="col-sm-2 col-form-label">Slider Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-user" name="sliderTitle" value="<?php echo $result['sliderTitle']; ?>"
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
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-user btn-block">Update</button>
        </div>
    </div>
</form>
</body>

</html>