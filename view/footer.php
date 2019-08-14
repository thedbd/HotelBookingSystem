</div>
<footer class="mt-5">
    <!--footer starts here-->
    <div class="upper-footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <a class="navbar-brand" href="#">logo</a>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                        is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h3>Recent News</h3>
                    <div class="recent-news hidden-mb-60">
                        <?php
$limit = 3;
$blogpost = viewBlogpost($limit);
foreach ($blogpost as $result) {
    ?>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="Admin/<?php echo $result['image']; ?>" width="50px"
                                    heoght="50px" class="small-img" alt="small-img">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a
                                        href="?p=blog&id=<?php echo $result['bid']; ?>"><?php echo $result['title']; ?></a>
                                </h3>

                                <h5><i class="fa fa-calendar"></i><a><?php echo $result['posted_date']; ?></a>
                                </h5>
                            </div>
                        </div>

                        <?php
}
?>


                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <h3>Get in Touch</h3>
                    <div class="info_item_footer">
                        <i class="fas fa-home fa-fw"></i>
                        <h6>Gaindakot-2, Nawalpur</h6>
                        <p>Oxford Chowk</p>
                    </div>
                    <div class="info_item_footer">
                        <i class="fas fa-phone fa-fw"></i>
                        <h6><a href="#">+977 9812345678</a></h6>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                    <div class="info_item_footer">
                        <i class="fas fa-envelope"></i>
                        <h6><a href="#">support@hotel.com</a></h6>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <p>&copy; 2019 Hotel Something. All rights reserved</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo $base_url; ?>resource/js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="<?php echo $base_url; ?>resource/js/bootstrap.min.js"></script>

</body>

</html>