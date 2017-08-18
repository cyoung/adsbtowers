<?php

$xml = simplexml_load_file("user_waypoints.xml");

$children = $xml->Document->Folder->children();


foreach ($children as $child) {
 if (isset($child->LookAt)) {
  $name = $child->name;
  $lat = $child->LookAt->latitude;
  $lng = $child->LookAt->longitude;

  print "addMarker($lat, $lng, '$name');\n";
 }
}

?>
