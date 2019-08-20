<!DOCTYPE html>
<html>

<head>
    <title>Gallery Add</title>

    <link rel="stylesheet" type="text/css" href="./resource/css/blogpost.css">
    <script type="text/javascript" src="./resource/js/blogpost.js"></script>
</head>

<body>
    <div class="container">
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
 
        <div class="row">
        <div class="col-md-3 imgUp">
            <div class="imagePreview"></div>
            <label class="btn btn-primary">Upload<input type="file" name="fileToUpload" accept="image/*" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
            </label>
            </div><!-- col-2 -->
        <i class="fa fa-plus imgAdd"></i>
        </div><!-- row -->

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add Image</button>
                </div>
            </div>
        </div> 
        </form>
    </div>   
</body>
</html>