<table class="table">

    <thead class="thead-dark">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Descriptions</th>
            <th scope="col">Features</th>
            <th scope="col">Images</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $rid = null;
        $room = view_rooms($rid);
if ($room) {
    foreach ($room as $result) {
        ?>

        <tr>
            <th scope="row"><?php echo $result['rid']; ?></th>
            <td><?php echo $result['rname']; ?></td>
            <td><?php echo $result['rdescription']; ?></td>
            <td><?php echo $result['rfeatures']; ?></td>
            <td><img src="<?php echo $result['image']; ?>" width="70px" height="70px"></td>
            <td><?php echo $result['rprice']; ?></td>
            <td><a href="<?php echo $base_url . "?p=home&a=viewRooms&id=" . $result['rid'] . "&type=" . $result['status']; ?>
" onclick="return confirm('Do you want to change?');"><?php if ($result['status'] == '1') {echo '<span class="badge badge-primary">Active</span>';} else {echo '<span class="badge badge-secondary">Inactive</span>';}
        ;?></a></td>

            <td><a href="<?php echo $base_url . "?p=home&a=editRooms&id=" . $result['rid']; ?>"> <button
                        class="btn btn-danger">Edit</button></a>
                <a href="<?php echo $base_url . "?p=home&a=deleteRoom&id=" . $result['rid'] . "&img=" . $result['image']; ?> "
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