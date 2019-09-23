   <script language="JavaScript" type="text/javascript" src="resource/js/jquery-3.4.1.min.js"></script>

   <script type="text/javascript">
$(document).ready(function() {

    $('#addRoom').on('click', function(e) {
        var price = $('#price').text();
        var night = 0;
        $('#night').html(night);
        night += 1;

        $('#priceInSummary').html(price);
    });

});
   </script>

   <div class="container">
       <div class="row">
           <div class="col-sm-12">
               <div class="card">
                   <div class="card-body">
                       <div class="row">
                           <div class="col-sm-2"></div>
                           <div class="col-sm-8">
                               <form action="" method="POST">
                                   <div class="row">
                                       <div class="col-sm-4">
                                           <label>Check In</label>
                                       </div>
                                       <div class="col-sm-4">
                                           <label>Check Out</label>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-sm-4">
                                           <input type="date" name="checkin" />
                                       </div>
                                       <div class="col-sm-4">
                                           <input type="date" name="checkout" />
                                       </div>
                                       <div class="col-sm-4">
                                           <input type="submit" class="btn btn-warning" value="Check Availability">
                                       </div>
                                   </div>
                               </form>
                           </div>
                           <div class="col-sm-2"></div>
                       </div>
                   </div>
               </div>

           </div>
       </div>

       <div class="row">
           <div class="col-sm-9">
               <?php
$accomodation = viewAccomodation();
foreach ($accomodation as $result) {
    ?>

               <div class="card">
                   <div class="card-body">
                       <div class="row">
                           <div class="col-sm-4">
                               <div class="card">
                                   <div class="card-body">
                                       <img src="Admin/<?php echo $result['image']; ?>" class="card-img-top" alt="...">
                                   </div>

                               </div>
                           </div>
                           <div class="col-sm-8">

                               <div class="card">
                                   <div class="card-body">
                                       <h4 class="card-title"><?php echo $result['rname']; ?></h4>
                                       <div class="row">
                                           <div class="col-sm-4 ">
                                               <h6 class="card-title">Room Capacity: <h4>
                                                       <?php echo $result['capacity']; ?></h4>
                                                   <h6>
                                                       <h6 class="card-title">Room Rates Inclusive of Tax </h6>
                                           </div>
                                           <div class="col-sm-4">

                                           </div>
                                           <div class="col-sm-4">
                                               <h6 class="card-title" id="price"><?php echo $result['rprice']; ?></h6>
                                               <h6 class="card-title"> price for 1 night</h6>
                                           </div>
                                       </div>

                                   </div>
                               </div>
                               <div class="card">
                                   <div class="card-body">
                                       <a href="#">Room Info</a>&nbsp;&nbsp;<span>.</span>&nbsp;&nbsp;<a
                                           href="#">Enquire</a>&nbsp;&nbsp;
                                       <a class="tipso-tooltip tipso_style promo-code-icon" data-tipso
                                           data-tipso-tutle="SPECIAL OFFERS">
                                           <i class="fa fa-tag"></i>
                                           <button type="button" class="btn btn-outline-danger">PROMO
                                               OFFER</button>&nbsp;&nbsp;&nbsp;<button type="button"
                                               class="btn btn-warning" id="addRoom">Add Room</button>
                                       </a>

                                   </div>
                               </div>
                           </div>

                       </div>
                   </div>
               </div>
               <?php
}?>




           </div>
           <div class="col-sm-3">
               <div class="card">
                   <div class="card-body">
                       <h5 class="card-title">Booking Summary</h5>
                       <div class="row">
                           <div class="col-sm-4">
                               <h6>Dates</h6>
                           </div>
                           <div class="col-sm-8">
                               <h6>28/07/2019-29/07/2019</h6>
                           </div>


                       </div>
                       <div class="row">
                           <div class="col-sm-4">
                               <h6>Night</h6>
                           </div>
                           <div class="col-sm-8">
                               <div id="night"></div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-8">
                               <h6>Grand Deluxe Room</h6>
                           </div>
                           <div class="col-sm-4">
                               <h6>
                                   <button type="button" class="close" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </h6>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-8">
                           </div>
                           <div class="col-sm-4">
                               <h6>
                                   <div id="priceInSummary"></div>
                               </h6>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-8">
                               <h6>Grand Deluxe Room</h6>
                           </div>
                           <div class="col-sm-4">
                               <h6>
                                   <button type="button" class="close" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </h6>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-8">
                           </div>
                           <div class="col-sm-4">
                               <h6>$199.0</h6>
                           </div>
                       </div>
                       <hr>
                       <div class="row">
                           <div class="col-sm-8">
                               <h6>Total</h6>
                           </div>
                           <div class="col-sm-4">
                               <h6>$199.0</h6>
                           </div>
                       </div>
                       <div class="row">
                           <button type="button" class="btn btn-warning btn-lg btn-block ">Book</button>
                       </div>


                   </div>
               </div>
           </div>
       </div>


   </div>
   </div>