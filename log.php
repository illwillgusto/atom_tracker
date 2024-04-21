<?php
include('functions.php');

$json = file_get_contents('data.json');
$data = json_decode($json, 1);

?>

<?php


    foreach ($data as $task) {?> <!-- task is holding the information that can then be echoed -->

    <tr>
      <td><?= $task['name'] ?></td>
      <td>Data</td>
      <td>Data</td>
      <td>Data</td>
      <td><button class="btn btn-primary"><?= i('stop')?></button></td>
      <td><button class="btn btn-danger"><?= i('times')?></button></td>
    </tr>
<?php }?>
