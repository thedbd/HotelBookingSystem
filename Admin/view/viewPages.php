<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Link</th>
            <th scope="col">Title</th>
            <th scope="col">Metakeyword</th>
            <th scope="col">Meta Description</th>
            <th scope="col">Page Desc</th>
            <th scope="col">type</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $pid = null;
        $pages = viewPages($pid);
        foreach ($pages as $result) {
        ?>
        <tr>
            <th scope="row"><?php echo $result['pID']; ?></th>
            <td><?php echo $result['pName']; ?></td>
            <td><?php echo $result['link']; ?></td>
            <td><?php echo $result['title']; ?></td>
            <td><?php echo $result['metaKeyword']; ?></td>
            <td><?php echo $result['metaDesc']; ?></td>
            <td><?php echo $result['pageDesc']; ?></td>
            <td><?php echo $result['type']; ?></td>
            <td><?php echo $result['status']; ?></td>
            <td>
                <a href="<?php echo $base_url . "?p=home&a=editPages&id=" . $result['pID']; ?>">
                 <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>

                    &nbsp 
                
                    <a href="<?php echo $base_url . "?p=home&a=deletePage&id=" . $result['pID']; ?>" onClick="return confirm('Are you absolutely sure you want to delete?')" >
                    <i class="fa fa-trash" aria-hidden="true"></i></a>
                
            </td>
        </tr>
        <?php

}
?>
    </tbody>
</table>

</div>

