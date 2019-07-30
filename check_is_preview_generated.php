<?php
header("Access-Control-Allow-Origin: *");

$proj_id = $_GET['project_id'];

$filename = '/var/www/html/prodid_'.$proj_id.'.mp4';

if (file_exists($filename)) {
    echo json_encode(array('is_exists' => true));
} else {
    echo json_encode(array('is_exists' => false));
}

?>
