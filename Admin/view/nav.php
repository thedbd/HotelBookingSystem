 <!-- Nav Item - Pages Collapse Menu -->
 <li class="nav-item <?php if (isset($_GET['a'])) {$a = addAdmin;
    $b = viewAdmin;if ($_GET['a'] == $a || $_GET['a'] == $b) {echo 'active';}}?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
         aria-controls="collapseTwo">
         <i class="fas fa-fw fa-user"></i>
         <span>Admins</span>
     </a>
     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item <?php if (isset($_GET['a'])) {if ($_GET['a'] == "addAdmin") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=addAdmin" ?>">Add New</a>
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewAdmin") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=viewAdmin" ?>">View All</a>
         </div>
     </div>
 </li>
 <li class="nav-item <?php if (isset($_GET['a'])) {$a = addPages;
    $b = viewPages;if ($_GET['a'] == $a || $_GET['a'] == $b) {echo 'active';}}?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
         aria-controls="collapseFour">
         <i class="fas fa-fw fa-user"></i>
         <span>Pages</span>
     </a>
     <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item <?php if (isset($_GET['a'])) {if ($_GET['a'] == "addPages") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=addPages" ?>">Add New</a>
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewPages") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=viewPages" ?>">View All</a>
         </div>
     </div>
 </li>
 <li class="nav-item <?php if (isset($_GET['a'])) {$a = addServices;
    $b = viewServices;if ($_GET['a'] == $a || $_GET['a'] == $b) {echo 'active';}}?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
         aria-controls="collapseOne">
         <i class="fas fa-fw fa-atom"></i>
         <span>Services</span>
     </a>
     <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "addServices") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=addServices" ?>">Add New</a>
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewServices") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=viewServices" ?>">View All</a>
         </div>
     </div>
 </li>
 <li class="nav-item <?php if (isset($_GET['a'])) {$a = addGallery;
    $b = viewGallery;if ($_GET['a'] == $a || $_GET['a'] == $b) {echo 'active';}}?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
         aria-controls="collapseOne">
         <i class="fas fa-fw fa-atom"></i>
         <span>Gallery</span>
     </a>
     <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "addGallery") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=addGallery" ?>">Add New</a>
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewGallery") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=viewGallery" ?>">View All</a>
         </div>
     </div>
 </li>

 <li class="nav-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewTestimonials") {echo 'active';}}?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
         aria-controls="collapseOne">
         <i class="fas fa-fw fa-cog"></i>
         <span>Testimonials</span>
     </a>
     <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewTestimonials") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=viewTestimonials" ?>">View All</a>
         </div>
     </div>
 </li>

 <li class="nav-item <?php if (isset($_GET['a'])) {$a = addRooms;
    $b = viewRooms;if ($_GET['a'] == $a || $_GET['a'] == $b) {echo 'active';}}?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true"
         aria-controls="collapseEight">
         <i class="fas fa-fw fa-atom"></i>
         <span>Rooms</span>
     </a>
     <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "addRooms") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=addRooms" ?>">Add New</a>
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewRooms") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=viewRooms" ?>">View All</a>
 <li class="nav-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewSlider") {echo 'active';}}?>">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true"
         aria-controls="collapseSeven">
         <i class="fas fa-fw fa-cog"></i>
         <span>Slider</span>
     </a>
     <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "addSlider") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=addSlider" ?>">Add New</a>
             <a class="collapse-item  <?php if (isset($_GET['a'])) {if ($_GET['a'] == "viewSlider") {echo 'active';}}?>"
                 href="<?php echo $base_url . "?p=home&a=viewSlider" ?>">View All</a>
         </div>
     </div>

     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true"
         aria-controls="collapseTwo">
         <i class="fab fa-blogger"></i>
         <span>Blog Post</span>
     </a>

     <div id="collapse9" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
             <a class="collapse-item" href="<?php echo $base_url . "?p=home&a=addBlogPost" ?>">Add blog</a>
             <a class="collapse-item" href="<?php echo $base_url . "?p=home&a=viewBlogPost" ?>">View All</a>
         </div>
     </div>
 </li>
 </ul>

 <!-- End of Sidebar -->


 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


             <a href="../index.php" target="_blank"> <button class="btn btn-primary">Visit Site</button></a>


             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto">

                 <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                 <li class="nav-item dropdown no-arrow d-sm-none">
                     <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <i class="fas fa-search fa-fw"></i>
                     </a>
                     <!-- Dropdown - Messages -->
                     <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                         aria-labelledby="searchDropdown">
                         <form class="form-inline mr-auto w-100 navbar-search">
                             <div class="input-group">
                                 <input type="text" class="form-control bg-light border-0 small"
                                     placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary" type="button">
                                         <i class="fas fa-search fa-sm"></i>
                                     </button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </li>


                 <!-- Nav Item - User Information -->
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                         <span
                             class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['admin']['name']; ?></span>
                         <img class="img-profile rounded-circle" src="<?php echo $_SESSION['admin']['image']; ?>">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="<?php echo $base_url . "?p=home&a=viewProfile" ?>">
                             <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                             Profile
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                             <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                             Logout
                         </a>
                     </div>
                 </li>

             </ul>

         </nav>
         <!-- End of Topbar -->


         <!-- Begin Page Content -->
         <div class="container-fluid">

             <!-- Page Heading -->
             <div class="d-sm-flex align-items-center justify-content-between mb-4">
                 <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
             </div>       
<?php
if (hasFlash('message')) {
    $falshError = getFlash('message');
    foreach ($falshError as $fe) {
        ?>
             <div class="alert alert-<?php echo $fe['type']; ?> alert-dismissible fade show" role="alert">
                 <?php echo empty($fe['title']) ? '' : "<strong>" . $fe['title'] . "</strong> ";
        echo $fe['body']; ?>
                
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <?php }}?>
                 <br> 
         </div>
