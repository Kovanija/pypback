<?php


$scene = $_POST['json'];
$proj_id = $_POST['project_id'];
$template_id = $_POST['template_id'];
$images = $_POST['images'];
$quality = $_POST['quality'];
$old_proj_id = $_POST['old_project_id'];


switch($template_id)
{
case 1:
exec("blender -b /templates/LogoRevealPlexus/standard.".$quality."p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id."_commercial.mp4 -ird /var/www/html/assets_projid_".$old_proj_id." > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
case 11: 
exec("/templates/blender-2.79-linux-glibc219-x86_64/blender -b /templates/SFLogoReveal/standard.".$quality."p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id."_commercial.mp4 -ird /var/www/html/assets_projid_".$old_proj_id." > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
case 21:
exec("blender -b /templates/NGGreetengsPersonal/standard.".$quality."p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id."_commercial.mp4 -ird /var/www/html/assets_projid_".$old_proj_id." > /dev/null 2>&1 &");
break;
case 31:
exec("blender -b /templates/test/NGGreetengsLogoAlembicIzmenjenaPutanja/standard.".$quality."p.blend -P /home/ubuntu/blenderer/blenderer.py -- -ro /var/www/html/prodid_".$proj_id."_commercial.mp4 -ird /var/www/html/assets_projid_".$old_proj_id." > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
}
