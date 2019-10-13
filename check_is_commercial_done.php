<?php

$ids = $_POST['ids'];


$found_ids = array();

foreach($ids as $id)
{
	if(file_exists('/var/www/html/prodid_' . $id . '_commercial.mp4'))
		$found_ids[] = $id;

}

echo json_encode($found_ids);
