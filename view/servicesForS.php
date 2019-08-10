<div class="container">
    <h3 class="text-center mt-5">Services</h3>
    <p class="text-center"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
        embarrassing hidden in the middle of text.</p>
    <hr width="300px" style="border:1px solid red;">
    <!-- services starts here -->
    <div class="text-center">
        <div class="row mt-5 services-types">
            <?php
$limit = 1;
$services = viewServices($limit);
foreach ($services as $result) {
    ?>
            <div class="col-md-4 col-sm-12">
                <i class="fa fa-<?php echo $result['icon']; ?> fa-fw"></i>
                <h4><?php echo $result['title']; ?></h4>
                <p> <?php echo $result['description']; ?></p>
            </div>
            <?php }?>
        </div>
    </div>
    <!-- end of services-->
</div>