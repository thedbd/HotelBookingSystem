<div class="row dash">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body "><span class="badge badge-danger">5</span>
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="fas fa-fw fa-user-tie"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Registered Guests</p>
                            <p class="card-title color">150
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body "><span class="badge badge-danger">5</span>
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="fas fa-fw fa-file-invoice"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Total Bookings</p>
                            <p class="card-title color">898
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?php echo $base_url . "?p=home&a=viewTestimonials" ?>">
            <div class="card card-stats">

                <div class="card-body "><span class="badge badge-danger"><?php $inactivett = viewTestimonialsForInactive();
echo $inactivett?>
                    </span>
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="fas fa-fw fa-comment-dots"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Testimonials</p>
                                <p class="card-title color"><?php $tt = viewTestimonialsForActive();
echo $tt?>

                                </p>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-body ">
            <div class="row">
                <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                        <i class="fas fa-fw fa-file-invoice"></i>
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="numbers">
                        <p class="card-category">Pending Requests</p>
                        <p class="card-title color">45K
                        </p>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<br>
 <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
             </button>
             <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                 <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                         aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                         <button class="btn btn-primary" type="button">
                             <i class="fas fa-search fa-sm"></i>
                         </button>
                     </div>
                 </div>
             </form>
