<!DOCTYPE html>
<html>

<head>
    <title>Gallery Add</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">

        <div class="form-group row">
            <label for="inputimagename" class="col-sm-2 col-form-label">Image Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="imagetitle" placeholder="Enter Image Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="description1" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="exampleFormControlTextarea3" rows="7"
                    required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Image:</label>
            <div class="col-sm-10">
                <input type="file" name="fileToUpload" id="fileToUpload" class="waves-effect left" accept="image/*">
            </div>
        </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Image</button>
            </div>
        </div>
    </form>
</body>

</html>