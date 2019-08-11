
<?php
ob_start();

if (isset($_GET['a'])) {

	if($_GET['a']=="addBlogPost"){

		if (empty($_POST)) {
        include 'view/addBlogPost.php';
         return;
        }

		if (empty($_POST['title']) || empty($_POST['postedby']) || empty($_POST['description'])) {
            $error = 'Title and description are required.';
          
            include 'view/addBlogPost.php';
            return;
        }

        try{
        	$title = $_POST['title'];
	        $description = $_POST['description'];
	        $postedby = $_POST['postedby'];
	        $posted_date = date("Y-m-d")." ".date("h:i:sa"); 
	        $status = '1';
	       
	        $target="";
	                 if (!empty($_FILES["fileToUpload"])) {
	                    $target = "images/".basename($_FILES['fileToUpload']['name']);
	               
	                    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
	                }

	         $blogpost = blogpost_add($title, $description,$postedby,$posted_date,$target,$status);
	        if ($blogpost) {
	 
	            echo "<h3>Added Post</h3>";
	            include 'view/addBlogPost.php';
	            
	        }else{
	        return false;
	         }
	     }catch(Exception $ex)
	     {
	     	throwError();
	     }
	}
    
      
    if ($_GET['a'] == "viewBlogPost") {
        include 'view/viewBlogPost.php';

    }

    if ($_GET['a'] == "deleteBlogPost") {

        $bid = $_POST['delname'];
        $deleteBlogPost = delete_blogpost($bid);
        if ($deleteBlogPost) {

            echo "<h3>Deleted</h3>";

            include 'view/viewBlogPost.php';
           // header("location:" . $base_url . "?p=home&a=viewBlogPost");
        } else {
            echo "<h2>something went wrong!</h2>";
            return;
        }
    }  

    if ($_GET['a'] == "editBlogPost") {
           if (empty($_POST)) {
            include 'view/editBlogPost.php';
             return;
            }

        	 	$bid = $_GET['id'];
                $title = $_POST['title'];
                $postedby =$_POST['postedby'];
                $description = $_POST['description'];
                $d = date("Y-m-d")." ".date("h:i:sa");
                
                $target="";
	                 if (!empty($_FILES["fileToUpload"])) {
	                    $target = "images/".basename($_FILES['fileToUpload']['name']);
	               		
	                    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
	                }

	         $blogpost = blogpost_edit($bid,$title,$description,$postedby,$d,$target);
	        if ($blogpost) {
	 
	            echo "<h3>Updated</h3>";
	            include 'view/viewBlogPost.php';
	        }else{
	        return false;
	         }
        }
}
ob_end_flush();
?>