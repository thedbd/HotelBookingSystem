<?php
ob_start();
include 'helper/FlashMessageHelper.php';
    try
    {     
        if (isset($_GET['a'])) { 
            if ($_GET['a'] == "viewGuests") {
                include 'view/viewGuests.php';
            }
        
        }

    }catch(Exception $ex)
    {
        echo $ex;
    }

ob_end_flush();
?>