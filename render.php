<?php


$scene = $_POST['json'];
$proj_id = $_POST['project_id'];
$template_id = $_POST['template_id'];
$images = $_POST['images'];


mkdir("/var/www/html/assets_projid_" . $proj_id);
chmod("/var/www/html/assets_projid_" . $proj_id, 0777);

$counter = 1;

foreach($images as $image)
{
	if($counter < 10)
		$putanja = "/var/www/html/assets_projid_" . $proj_id . "/0" . $counter.".png";
	else
		$putanja = "/var/www/html/assets_projid_" . $proj_id . "/" . $counter.".png";

	file_put_contents($putanja, file_get_contents($image));

	$counter++;
}

switch($template_id)
{
case 1:
exec("blender -b /templates/LogoRevealPlexus/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 -ird /var/www/html/assets_projid_".$proj_id." > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
case 11: 
exec("/templates/blender-2.79-linux-glibc219-x86_64/blender -b /templates/SFLogoReveal/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 -ird /var/www/html/assets_projid_".$proj_id." > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
case 21:
exec("blender -b /templates/NGGreetengsPersonal/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 -ird /var/www/html/assets_projid_".$proj_id." > /dev/null 2>&1 &");
break;
case 31:
exec("blender -b /templates/test/NGGreetengsLogoAlembicIzmenjenaPutanja/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -ro /var/www/html/prodid_".$proj_id.".mp4 -ird /var/www/html/assets_projid_".$proj_id." > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
}
