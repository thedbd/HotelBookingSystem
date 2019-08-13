
    

<div class="row">
    <div class="col-md-12">
        <?php 
            $pid =$_GET['id'];
            $page = viewPages($pid);
            foreach ($page as $result) {
        ?>

        <form class="user" action="<?php echo $base_url . "?p=home&a=editPages&id=" . $result['pID']; ?>" method="POST"
            enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="" value="<?php echo $result['pName']; ?>" name="pname" required
                        placeholder="Page Name">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="" value="<?php echo $result['metaKeyword']; ?>" name="mKey" required
                        placeholder="Meta Keywords">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="" name="mDesc" required value="<?php echo $result['metaDesc']; ?>"
                    placeholder="Meta Description">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="" name="type" required value="<?php echo $result['type']; ?>"
                    placeholder="Page Type">
            </div>
             <div class="form-group">
                <input type="text" class="form-control form-control-user" id="" name="ptitle" required value="<?php echo $result['title']; ?>"
                    placeholder="Page Title">
            </div>
            <div class="form-group">
                <textarea class="form-control mb-3" name="description" id="exampleFormControlTextarea3" rows="7" 
                    required placeholder="Page Description"><?php echo $result['pageDesc']; ?></textarea>
            </div>

    </div> <input type="submit" value="Update Page" class="btn btn-primary btn-user btn-block">
    </form>
    <?php
}
?>    
</div>