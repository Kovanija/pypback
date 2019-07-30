<?php


$scene = $_POST['json'];
$proj_id = $_POST['project_id'];
$template_id = $_POST['template_id'];

switch($template_id)
{

case 1:
exec("blender -b /templates/LogoRevealPlexus/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py -- -so '$scene' -ro /var/www/html/test2.mp4  2>&1 &");
break;
case 11: 
exec("blender -b /templates/SFLogoReveal/standard.360p.blend -P /home/ubuntu/blenderer/blenderer.py 2>&1 &");
break;

}

