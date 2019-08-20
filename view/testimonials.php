<!-- Testimonials -->
<div class="container testimonial">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
$testimonials = viewTestimonials();
foreach ($testimonials as $result) {
    ?>
            <div class="carousel-item <?php if($result['tid'] == 4){ echo 'active'; } ?>">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-4">
                            <img src="resource/images/testimonial/attractive.jpg" class="rounded float-left img-fluid"
                                alt="...">
                        </div>
                        <div class="col-6">
                            <h1 class="display-4"><?php echo $result['name'];?></h1>
                            <p class="lead"><?php echo $result['email'];?>
</p>
                            <hr class="my-4">
                            <p> <?php echo $result['testimonials'];?></p>
                            <p>   <?php if ($result['rate'] == 1) {echo "&starf;&star;&star;&star;&star;";} else if ($result['rate'] == 2) {echo "&starf;&starf;&star;&star;&star;";} else if ($result['rate'] == 3) {echo "&starf;&starf;&starf;&star;&star;";} else if ($result['rate'] == 4) {echo "&starf;&starf;&starf;&starf;&star;";} else if ($result['rate'] == 5) {echo "&starf;&starf;&starf;&starf;&starf;";}
?></p>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- testimonials ends here-->