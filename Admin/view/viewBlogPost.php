<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Posted By</th>
            <th scope="col">Posted Date</th>
            <th scope="col">Last Update</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$bid = null;
$blogpost = blogpost_view($bid);
foreach ($blogpost as $result) {
    ?>
        <tr>
            <th scope="row"><?php echo $result['bid']; ?></th>
            <td><?php echo $result['title']; ?></td>
            <td><?php echo $result['description']; ?></td>
            <td><?php echo $result['posted_by']; ?></td>
            <td><?php echo $result['posted_date']; ?></td>
            <td><?php echo $result['last_update']; ?></td>
            <td><img src="<?php echo $result['image']; ?>" width="70px" height="70px"></td>
            <td><?php echo $result['status']; ?></td>
            <td>
                <a href="<?php echo $base_url . "?p=home&a=editBlogPost&id=" . $result['bid']; ?>">
               
                <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>

                &nbsp
                
                    <a href="<?php echo $base_url . "?p=home&a=deleteBlogPost&id=" . $result['bid']."&img=" . $result['image']; ?>" onClick="return confirm('Are you absolutely sure you want to delete?')" >

                    <i class="fa fa-trash" aria-hidden="true"></i></a>

                <!--
                <a href="#deleteBlogModal" data-toggle="modal" onClick="del(<?php echo $result['bid']; ?>); " >
                 <i class="fa fa-trash" aria-hidden="true"></i></a>
                -->
            </td>
        </tr>
        <?php

}
?>
    </tbody>
</table>

