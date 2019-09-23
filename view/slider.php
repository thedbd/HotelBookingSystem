<!-- sliders starts here-->
<?php
$slider = getSlider();
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php

for ($i = 0; $i < sizeof($slider); $i++) {
    ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"
            class="<?php if ($i == 0) {echo 'active';}?>"></li>
        <?php
}?>
    </ol>
    <div class="carousel-inner">
        <?php
foreach ($slider as $result) {
    ?>
        <div class="carousel-item <?php if ($result['sliderId'] == '170') {echo 'active';}?>">
            <img src=" Admin/<?php echo $result['sliderImg'] ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="jumbotron slider-text">
                    <h1 class="display-4"><?php echo $result['sliderTitle']; ?></h1>
                    <p class="lead"><?php echo $result['sliderDesc']; ?></p>
                    <a class="btn btn-prime btn-lg" href="?p=selectRoom" role="button">Book Rooms</a>
                </div>
            </div>
        </div>


        <?php
}?>
    </div>

    <!--
Carousel ends here -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- CTA starts here -->
<div class="container-fluid cta">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h5>Reserve a room for your family</h5> — Far far away behind the word mountains far.
            </div>
            <div class="col-3">
                <a href="?p=accomodation" class="btn btn-prime btn-lg float-right">Reserve Now!</a>
            </div>
        </div>
    </div>
</div>

<!-- cta ends here -->