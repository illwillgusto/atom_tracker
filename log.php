<?php
include('functions.php');

$json = file_get_contents('data.json');
$data = json_decode($json, 1);


switch ($_GET['mode']) {
  case 'value':

    case 'build':
      foreach ($data as $task) {?> <!-- task is holding the information that can then be echoed -->
    <tr>
      <td><?= $task['name'] ?></td>
      <td><?= date_nice($task['date_start']) ?></td>
      <td><?= $task['date_end'] ?></td>
      <td>
        <?
          if($task['date_end'] == "") {
            echo time_nice(time() - $task['date_start']); // this will determine how much time was elapse
          }else {
            echo time_nice(($task['date_end'] - $task['date_start']));
          }
        ?>
      </td>
      <td><button class="btn btn-primary"><?= i('stop')?></button></td>
      <td><button class="btn btn-danger"><?= i('times')?></button></td>
    </tr>
<?php }

      break;

}
