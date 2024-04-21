<?php


# Return a FontAwesome icon:
function i($code){
 $icon = '<i class="fas fa-' .$code. '"></i>';
 return $icon;
}

?>

<?php


    foreach ($data as $task) { //task is holding the information that can then be echoed

?>
    <tr>
      <td><?= $task['name'] ?></td>
      <td>Data</td>
      <td>Data</td>
      <td>Data</td>
      <td><button class="btn btn-primary"><?= i('stop')?></button></td>
      <td><button class="btn btn-danger"><?= i('times')?></button></td>
    </tr>
<?php }?>
