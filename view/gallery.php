
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