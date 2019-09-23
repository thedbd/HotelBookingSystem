<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">User Type</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$admin = view_admin();
foreach ($admin as $result) {
    ?>
        <tr>
            <th scope="row"><?php echo $result['userID']; ?></th>
            <td><?php echo $result['username']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['password']; ?></td>
            <td><?php echo $result['uType']; ?></td>
            <td><img src="<?php echo $result['image']; ?>" width="80px" height="80px" alt="update your profile picture from profile section"></td>
            <td><a href="<?php echo $base_url . "?p=home&a=viewAdmin&id=" . $result['userID'] . "&type=" . $result['status']; ?>
" onclick="return confirm('Do you want to change?');"><?php if ($result['status'] == '1') {echo '<span class="badge badge-primary">Active</span>';} else {echo '<span class="badge badge-secondary">Inactive</span>';}
    ;?></a></td>
            <td> <?php if ($_SESSION['admin']['user_name'] != $result['username']) {?> <button
                    class="btn btn-primary">Edit</button><a
                    href="<?php echo $base_url . "?p=home&a=deleteAdmin&id=" . $result['userID'] . "&img=" . $result['image']; ?>"><?php }?>
                    <?php if ($_SESSION['admin']['user_name'] != $result['username']) {?><button
                        class="btn btn-danger">Delete</button></a><?php }?></td>
        </tr>
        <?php
}
?>
    </tbody>
</table>