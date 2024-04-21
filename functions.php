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
}
?>
