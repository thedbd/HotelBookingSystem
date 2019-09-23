<div class="container">
<div class="row">
    <div class="col-md-12">
        <form class="user" action="<?php echo $base_url . "?p=home&a=addServices"; ?>" method="POST"
            enctype="multipart/form-data">

            <div class="form-group">
                <small id="titleHelp" class="form-text text-muted">Services title</small>
                <input type="text" class="form-control form-control-user" id="" name="title" required value=""
                    placeholder=" Enter Service Title">

            </div>
            <div class="form-group">
                <textarea class="form-control mb-3" name="description" id="exampleFormControlTextarea3" rows="7"
                    required placeholder="Description"></textarea>

            </div>
            <div class="form-group">
                <small id="titleHelp" class="form-text text-muted">Services Icon</small>
                <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"
                    class="btn btn-primary btn-sm float-left mt-2 mb-2">Get it from here</a>
                <input type="text" class="form-control form-control-user" id="" name="icon" required value=""
                    placeholder="Paste Icon Name Here">

            </div>
            <input type="submit" value="Add Service" class="btn btn-primary btn-user btn-block">
        </form>
    </div>
</div>
</div>