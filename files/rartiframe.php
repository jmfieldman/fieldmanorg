<?php

$depth = rand(6,8);
$equation = '';
while (strlen($equation) < 60) 
$equation = `/home/jason/www/www.fieldman.org/public_html/cgi-bin/randart depth $depth`;
$eqpass = str_replace(' ', '', $equation);

$img = '<img class="randartPic" onclick="alert(\'foo\');" style="box-shadow: 0 2px 10px rgba(0,0,0,0.5);" src="/cgi-bin/randart?*6'. $eqpass .'" alt="Random Image" />';

$dispequation = str_replace(',', ', ', $equation);


echo '<div style="color:#444;font-size:75%;width:480;">' . $dispequation . '</div>';
echo '<br/>';

echo $img;

echo '<br/><br/>';
echo '<div style="color:#444;font-size:50%;">';
echo '[<a target="_blank" href="/cgi-bin/randart?*0'. $eqpass .'">640x480</a>] ';
echo '[<a target="_blank" href="/cgi-bin/randart?*1'. $eqpass .'">800x600</a>] ';
echo '[<a target="_blank" href="/cgi-bin/randart?*2'. $eqpass .'">1024x768</a>] ';
echo '[<a target="_blank" href="/cgi-bin/randart?*3'. $eqpass .'">1280x1024</a>] ';
echo '[<a target="_blank" href="/cgi-bin/randart?*4'. $eqpass .'">1600x1200</a>] ';
echo '[<a target="_blank" href="/cgi-bin/randart?*7'. $eqpass .'">1920x1200</a>] ';
echo '[<a target="_blank" href="/cgi-bin/randart?*8'. $eqpass .'">2560x1440</a>] ';
echo '</div>'

?>
