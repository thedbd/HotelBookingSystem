<link rel="stylesheet" type="text/css" href="./resource/css/blogpost.css">
<script type="text/javascript" src="./resource/js/blogpost.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="user" action="<?php echo $base_url . "?p=home&a=addRooms"; ?>" method="POST"
                enctype="multipart/form-data">

                <div class="form-group row">
                    
                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="" name="rname" required value=""
                        placeholder=" Enter Room Name">
                    </div>

                    <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="" name="rprice" required value=""
                        placeholder=" Enter Room price">
                    </div>
                </div>
            
                <div class="form-group">
                    <textarea class="form-control mb-3" name="rdescription" id="exampleFormControlTextarea3" rows="5"
                        required placeholder="Room Description"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control mb-3" name="rfeatures" id="exampleFormControlTextarea4" rows="5"
                        required placeholder="Room Features"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-3 imgUp">
                        <div class="imagePreview"></div>
                        <label class="btn btn-primary">Upload<input type="file" name="fileToUpload" accept="image/*" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div><!-- col-2 -->
                    <i class="fa fa-plus imgAdd"></i>
                </div><!-- row -->
            
                <input type="submit" value="Add Room" class="btn btn-primary btn-user btn-block">
            </form>
        </div>
    </div>
</div>
