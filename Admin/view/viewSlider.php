<table class="table">

    <thead class="thead-dark">

        <tr>
            <th scope="col">#</th>
            <th scope="col">Slider Title</th>
            <th scope="col">Descriptions</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
$slider = viewSlider();
if ($slider) {
    foreach ($slider as $result) {
        ?>

        <tr>
            <th scope="row"><?php echo $result['sliderId']; ?></th>
            <td><?php echo $result['sliderTitle']; ?></td>
            <td><?php echo $result['sliderDesc']; ?></td>
            <td><img src="<?php echo $result['sliderImg']; ?>" width="70px" height="70px"></td>
    
          

            


             <td>
                <a href="<?php echo $base_url . "?p=home&a=editSlider&id=" . $result['sliderId']; ?>">
                    <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                    &nbsp 
                <a href="<?php echo $base_url . "?p=home&a=deleteSlider&id=" . $result['sliderId']. "&img=" . $result['sliderImg']; ?>" onClick="return confirm('Are you absolutely sure you want to delete?')" >
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