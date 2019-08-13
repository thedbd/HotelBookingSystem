<div class="rooms pb-5">
    <div class="container">
        <h3 class="text-center">Best Rooms</h3>
        <p class="text-center"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
            anything embarrassing hidden in the middle of text.</p>
        <hr width="300px" style="border:1px solid red;" />
        <div class="row mt-5">

            <?php
$room = viewRoom();
foreach ($room as $result) {
    ?>
            <div class="col-6">
                <div class="card">
                    <img src="Admin/<?php echo $result['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $result['rname']; ?></h5>
                        <p><span class="badge badge-dark">4.5</span> 254 Reviews</p>
                        <p class="card-text"><?php echo $result['rdescription']; ?></p>
                        <a href="#" class="btn btn-prime">Book now from <?php echo $result['rprice']; ?></a>
                    </div>
                </div>
            </div>
            <?php
}?>

        </div>
    </div>
</div>
</div>
<!-- more info -->