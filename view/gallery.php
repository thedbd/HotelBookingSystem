 <div class="container ">
     <h3 class="text-center mt-5 ">Our Gallery</h3>
     <p class="text-center "> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
         embarrassing hidden in the middle of text.</p>
     <hr width="300px " style="border:1px solid red; ">
     <div class="row mt-5">
         <?php
$gallery = viewGallery();
foreach ($gallery as $result) {
    ?>

         <div class="col-md-4 col-sm-12 mb-3 ">
             <img src="<?php echo "Admin/" . $result['image']; ?> " class="img-fluid ">


         </div>

         <?php }?>
     </div>
 </div>