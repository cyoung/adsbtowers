<?php

$fp = fopen('faa.txt', 'r');

while (!feof($fp)) {
 $s = trim(fgets($fp));
 $x = explode(" ", $s);
 if (count($x) < 5) continue;


 $name = $x[0];

 $city = $x[1];

 for ($i = 2; $i < 6; $i++) {
  if (floatval($x[$i]) == 0) {
   $city .= ' ' . $x[$i];
  } else {
   break;
  }
 }


 $lat = $x[$i];
 $lng = $x[$i+1];
 $site_id = $x[$i+2];
 $site_tier = $x[$i+3];

 print "addMarker($lat, $lng, '$name', '$site_tier');\n";
}

?>
