<?php
$bid = $_GET['id'];
$limit = 0;
$blogpost = viewBlogpost($limit);
$blog = getBlog($bid);
?>
<div class="container ">
<div class="row mt-5">
    <div class="col-md-8">
        <h2><?php echo $blog['title'];
?></h2><i>Written by <?php echo $blog['posted_by'] . " on " . $blog['posted_date']; ?>.</i>
        <img alt="first pic" src="Admin/<?php echo $blog['image']; ?>" class="mt-5 mb-5 img-fluid img-responsive ">
        <p class="text-justify"><?php echo $blog['description'];
?>
        </p>
    </div>
    <div class="col-md-4">
        <p>
            <h4 class="text-left mb-3"><b>Latest Blog Posts</b></h4>
            <ul class="list-group">

                <?php foreach ($blogpost as $result) {?>
                <li class="list-group-item"><a
                        href="?p=blog&id=<?php echo $result['bid']; ?>"><?php echo $result['title']; ?></a></li>
            <?php }?>
            </ul>
        </p>
    </div>
</div>