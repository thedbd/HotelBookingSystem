<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Phone</th>
            <th scope="col">Country</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $guests = viewGuests();
        foreach ($guests as $result) {
        ?>
        <tr>
            <th scope="row"><?php echo $result['gID']; ?></th>
            <td><?php echo $result['gName']; ?></td>
            <td><?php echo $result['gEmail']; ?></td>
            <td><?php echo $result['gPassword']; ?></td>
            <td><?php echo $result['gPhone']; ?></td>
            <td><?php echo $result['gCountry']; ?></td>
            <td><?php echo $result['gStatus']; ?></td>
        </tr>
        <?php
}
?>
    </tbody>
</table>

</div>

