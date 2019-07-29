<?php


$proj_id = $_GET['project_id'];

$filename = '/var/www/html/prodid_'.$proj_id.'.mp4';

if (file_exists($filename)) {
    echo json_encode('is_exists' => true);
} else {
    echo json_encode('is_exists' => false);
}

?>
