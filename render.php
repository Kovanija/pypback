<?php


$scene = $_POST['json'];
$proj_id = $_POST['project_id'];
$template_id = $_POST['template_id'];

switch($template_id)
{

case 1:
exec("blender -b /templates/LogoRevealPlexus/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 > /dev/null 2>&1 &");
break;
case 11: 
exec("blender -b /templates/SFLogoReveal/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 > /dev/null 2>&1 &");
break;
case 21:
exec("blender -b /templates/NGPersonal/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 > /dev/null 2>&1 &");
break;
case 31:
exec("blender -b /templates/NGLogo/standard.360p.blend -P /html/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/prodid_".$proj_id.".mp4 > /dev/null 2>&1 &");
break;
}

