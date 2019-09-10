<?php


$scene = $_POST['json'];
$proj_id = $_POST['project_id'];
$template_id = $_POST['template_id'];

switch($template_id)
{
case 1:
exec("blender -b /templates/LogoRevealPlexus/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 -ird /var/www/html/test2 > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
case 11: 
exec("blender -b /templates/SFLogoReveal/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 -ird /var/www/html/test > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
case 21:
exec("blender -b /templates/NGGreetengsPersonal/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 -ird /var/www/html/test2 > /dev/null 2>&1 &");
break;
case 31:
exec("blender -b /templates/test/NGGreetengsLogoAlembicIzmenjenaPutanja/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -ro /var/www/html/prodid_".$proj_id.".mp4 > /dev/null 2>&1 &", $output);
//file_put_contents('/var/www/html/output.txt', $output);
break;
}
