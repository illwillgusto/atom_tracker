<?php


# Return a FontAwesome icon:
function i($code){
 $icon = '<i class="fas fa-' .$code. '"></i>';
 return $icon;
}

# Date looks cleaner with this:
function date_nice($date) {
  return date('M j Y h:i A', $date);
}

function time_nice($seconds) {

  $h = floor(($seconds/60)/60); // hours
  $m = round(($seconds/60)) - ($h * 60); // minutes

  echo '<span class="hours">'.$h.'</span> hrs : <span class="minutes">'.$m.'</span> mins'; // Display result
}

function save($data) {
  $json = json_encode($data); //covert the json data
  $file = fopen("data.json", "w") or die("Unable to open file!"); //open the json file and prepare to use the write method
  fwrite($file, $json); //write the file, which will overwrite everything
}
?>
