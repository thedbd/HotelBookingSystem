<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Icon</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$sid = null;
$service = service_view($sid);
foreach ($service as $result) {
    ?>
        <tr>
            <th scope="row"><?php echo $result['sid']; ?></th>
            <td><?php echo $result['title']; ?></td>
            <td><?php echo $result['description']; ?></td>
            <td> <i class="fa fa-<?php echo $result['icon']; ?> fa-fw"></i></td>
            <td>
                <a href="<?php echo $base_url . "?p=home&a=editServices&id=" . $result['sid']; ?>">
                    <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>

                &nbsp &nbsp

                <a href="<?php echo $base_url . "?p=home&a=deleteServices&id=" . $result['sid']; ?>"
                    onClick="return confirm('Are you absolutely sure you want to delete?')">

                    <i class="fa fa-trash" aria-hidden="true"></i>
                    <!--
                 &nbsp &nbsp
                 <a href="#deleteServiceModal" data-toggle="modal">
                 <i class="fa fa-trash" aria-hidden="true"></i>
                -->
            </td>

        </tr>
        <?php
}
?>
    </tbody>
</table>


<!--

<div id="deleteServiceModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="">
                    <div class="modal-header">

                        <script type="text/javascript">
                            function del(x){
                                 document.getElementById("dlt").value = x;
                                }
                        </script>

                        <input type="" id="dlt" name="delname">
                        <h4 class="modal-title">Delete student</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">

                        <a href="" />
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>