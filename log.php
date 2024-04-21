<?php

$data = file_get_contents('data.json');

$array = json_decode($data, 1);

?>
<pre> <!-- this will be used to dump out the values -->
  <? print_r($array) ?>
</pre>
