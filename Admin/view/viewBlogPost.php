

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
            <td><?php echo $result['image']; ?></td>
            <td><?php echo $result['status']; ?></td>
            <td>
                <a href="<?php echo $base_url . "?p=home&a=editBlogPost&id=" . $result['bid']; ?>">
                 <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>

                &nbsp 
                
                <!--
                    <a href="<?php echo $base_url . "?p=home&a=deleteBlogPost&id=" . $result['bid']; ?>" onClick="return confirm('Are you absolutely sure you want to delete?')" >
                    <i class="fa fa-trash" aria-hidden="true"></i></a>
                -->

                <a href="#deleteBlogModal" data-toggle="modal" onClick="del(<?php echo $result['bid']; ?>); " >
                 <i class="fa fa-trash" aria-hidden="true"></i></a>

            </td>
        </tr>
        <?php

}
?>
    </tbody>
</table>



<div id="deleteBlogModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="<?php echo $base_url . "?p=home&a=deleteBlogPost" ?> ">
                    <div class="modal-header"> 

                        <script type="text/javascript">
                            function del(x){
                                 document.getElementById("dlt").value = x;
                                }
                        </script>  

                        <input type="hidden" id="dlt" name="delname">                  
                        <h4 class="modal-title">Delete Blog</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <p>Are you sure you want to delete this Record?</p>
                        <p class="text-warning"><small>This action can delete a record.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

                        <a href=" " />
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>