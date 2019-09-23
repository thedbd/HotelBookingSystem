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

            <td>
                <a href="<?php echo $base_url . "?p=home&a=editGallery&id=" . $result['gid']; ?>">
                    <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                    &nbsp 
                <a href="<?php echo $base_url . "?p=home&a=deleteGallery&id=" . $result['gid']. "&img=" . $result['image']; ?>" onClick="return confirm('Are you absolutely sure you want to delete?')" >
                        <i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
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