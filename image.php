<?php
if(isset($_GET['img'])) {
    $imagename = $_GET['img'];
    $imagename = "http://amiscms.byethost8.com/uploads/" . $imagename;
    echo file_get_contents($imagename);
}
    