<!-- services starts here -->
<div class="container text-center mb-5" id="services">
    <h3>Explore Our Services</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book.
    </p>

    <hr width="300px" style="border:1px solid red;" />
    <div class="row services-types">
        <?php
$limit = 0;
$services = viewServices($limit);
foreach ($services as $result) {
    ?>
        <div class="col-4">
            <i class="fa fa-<?php echo $result['icon']; ?> fa-fw"></i>
            <h4><?php echo $result['title']; ?></h4>
            <p> <?php echo $result['description']; ?></p>
        </div>
        <?php }?>
    </div>
</div>

<!-- end of services-->