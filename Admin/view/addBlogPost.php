
<link rel="stylesheet" type="text/css" href="./resource/css/blogpost.css">
<script type="text/javascript" src="./resource/js/blogpost.js"></script>

<div class="container">
<?php
	$d = date("Y-m-d")." ".date("h:i:sa");
	echo $d;
?>

<form action="<?php echo $base_url . "?p=home&a=addBlogPost" ?>" method="POST" enctype="multipart/form-data">

	 <div class="row">
		  <div class="col-md-6">
		  		<div class="form-group">
			    <label for="title">Blog Title:</label>
			    <input type="text" name="title" class="form-control" id="title" required>
			  </div>
		  </div>

		  <div class="col-md-6">
		  		<div class="form-group">
				    <label for="exampleFormControlSelect1">Posted By</label>
				    <input type="text" name="postedby" class="form-control" id="postedby" required>
			 	 </div>
		  </div>
	 </div>

		  		<div class="form-group">
			    <label for="desc">Description:</label>
			    <textarea class="form-control" name="description" rows="5" id="desc" required></textarea>
			  	</div>
  
	 <div class="row">
		  <div class="col-md-3 imgUp">
	    	<div class="imagePreview"></div>
			<label class="btn btn-primary">Upload<input type="file" name="fileToUpload" accept="image/*" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
			</label>
	  	  </div><!-- col-2 -->
	  	<i class="fa fa-plus imgAdd"></i>
	 </div><!-- row -->
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> 

</div>
