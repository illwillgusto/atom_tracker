<?php


# Return a FontAwesome icon:
function i($code){
 $icon = '<i class="fas fa-' .$code. '"></i>';
 return $icon;
}

function date_nice($date) {
  return date('M j Y h:i A', $date);
}
?>
