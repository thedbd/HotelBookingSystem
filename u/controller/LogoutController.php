<?php
session_start();
session_destroy();
header("location:" . $base_url . "../?p=login");
return;