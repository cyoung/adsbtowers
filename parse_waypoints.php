<?php

$xml = simplexml_load_file("user_waypoints.xml");

$children = $xml->Document->Folder->children();


foreach ($children as $child) {
 if (isset($child->name)) {
  $name = $child->name;
  $coords = $child->Point->coordinates;
  list ($lng, $lat) = explode(",", $coords);

  print "addMarker($lat, $lng, '$name');\n";
 }
}

?>
