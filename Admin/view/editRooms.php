<?php
$rid = $_GET['id'];
$rooms = view_Rooms($rid);
foreach ($rooms as $result) {
    ?>


<form action="<?php echo $base_url . '?p=home&a=editRooms&id=' . $result['rid']; ?>" method="POST">

    <div class="form-group row">
        <label for="inputroomname" class="col-sm-2 col-form-label">Room Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="rname" value="<?php echo $result['rname']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="inpuroomprice" class="col-sm-2 col-form-label">Room Price</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="rprice" value="<?php echo $result['rprice']; ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="description1" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="rdescription" id="exampleFormControlTextarea3" rows="5"
                required><?php echo $result['rdescription']; ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="features1" class="col-sm-2 col-form-label">Features</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="rfeatures" id="exampleFormControlTextarea4" rows="5"
                required><?php echo $result['rfeatures']; ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
<?php
}
?>
</body>

</html>