<!-- navbar starts here -->
<nav class="navbar navbar-expand-lg   sticky-top navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                $pages = viewPages();
                foreach ($pages as $result) {
?>
                <li class="nav-item <?php if (isset($_GET['p'])) {if ($_GET['p'] == $result['type']) {echo 'active';}}?>">
                    <a class="nav-link" href="<?php echo $result['link'];?>"><?php echo $result['pName'];?></span></a>
                </li>

                <?php } ?>

            </ul>
            <a href="#" class="btn btn-prime btn-lg float-right ">Reservation</a>
        </div>
    </div>
</nav>

<!-- navigation ends here-->