<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Testimonials</th>
            <th scope="col">Posted Date</th>
            <th scope="col">Status</th>
            <th scope="col">Image</th>
            <th scope="col">Rate</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$testimonials = viewTestimonials();
foreach ($testimonials as $result) {
    ?>
        <tr>
            <th scope="row"><?php echo $result['tid']; ?></th>
            <td><?php echo $result['name']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['testimonials']; ?></td>
            <td><?php echo $result['posted_date']; ?></td>
            <td><a href="<?php echo $base_url . "?p=home&a=viewTestimonials&id=" . $result['tid'] . "&type=" . $result['status']; ?>"
                    onclick="return confirm('Do you want to change?');"><?php if ($result['status'] == '1') {echo '<span class="badge badge-primary">Active</span>';} else {echo '<span class="badge badge-secondary">Inactive</span>';}
    ;?></a></td>
            <td> </td>
            <td>
                <?php if ($result['rate'] == 1) {echo "&starf;&star;&star;&star;&star;";} else if ($result['rate'] == 2) {echo "&starf;&starf;&star;&star;&star;";} else if ($result['rate'] == 3) {echo "&starf;&starf;&starf;&star;&star;";} else if ($result['rate'] == 4) {echo "&starf;&starf;&starf;&starf;&star;";} else if ($result['rate'] == 5) {echo "&starf;&starf;&starf;&starf;&starf;";}
    ?>
            </td>
            <td><a href="<?php echo $base_url . "?p=home&a=deleteTestimonials&id=" . $result['tid']; ?>"
                    onclick="return confirm('Do you really want to delete?');"> <button
                        class="btn btn-danger">Delete</button></a></td>

        </tr>
        <?php
}
?>
    </tbody>
</table>