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
  $json = json_encode($data, JSON_PRETTY_PRINT); //covert the json data
  if ($json === false) {
    echo "Error encoding JSON: " . json_last_error_msg();
    return false; // Provide error feedback
  }
  $file = fopen('data.json', "w") or die("Unable to open file!"); //open the json file and prepare to use the write method
  $bytes_written = fwrite($file, $json); //write the file, which will overwrite everything
  if ($bytes_written == false) {
    echo "Failed to write to file!";
    return false;
  }

  fclose($file); // Ensure the file is closed properly
  return true; // Return true to indicate success 
}
?>
