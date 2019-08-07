<table class="table">

    <thead class="thead-dark">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Image Title</th>
            <th scope="col">Descriptions</th>
            <th scope="col">Image</th>
            <th scope="col">Posted Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
$gallery = view_gallery();
if ($gallery) {
    foreach ($gallery as $result) {
        ?>

        <tr>
            <th scope="row"><?php echo $result['gid']; ?></th>
            <td><?php echo $result['imagetitle']; ?></td>
            <td><?php echo $result['description']; ?></td>
            <td><img src="<?php echo $result['image']; ?>" width="70px" height="70px"></td>
            <td><?php echo $result['posteddate']; ?></td>
            <td><a href="<?php echo $base_url . "?p=home&a=viewGallery&id=" . $result['gid'] . "&type=" . $result['status']; ?>
" onclick="return confirm('Do you want to change?');"><?php if ($result['status'] == '1') {echo '<span class="badge badge-primary">Active</span>';} else {echo '<span class="badge badge-secondary">Inactive</span>';}
        ;?></a></td>

            <td><a href="<?php echo $base_url . "?p=home&a=editGallery&id=" . $result['gid']; ?>"> <button
                        class="btn btn-danger">Edit</button></a>
                <a href="<?php echo $base_url . "?p=home&a=deleteGallery&id=" . $result['gid'] . "&img=" . $result['image']; ?> "
                    onclick="return confirm('Do you really want to delete?');"> <button
                        class="btn btn-danger">Delete</button></a></td>



        </tr>
        <?php
}
} else {
    ?>
        <tr>
            <td>No Records Found</td>
        </tr>
        <?php
}
?>
    </tbody>
</table>