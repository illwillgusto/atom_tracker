<?php
include('functions.php');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$json = file_get_contents('data.json');
$data = json_decode($json, 1);

if (!$data) {
  echo "Error: Data could not be decoded or is empty.";
  exit; // Add error handling for empty or invalid JSON *optional
}

switch ($_GET['mode']) {

  case 'new':
      $id = time();
      $data[$id]['id'] = $id;
      $data[$id]['task'] = $_GET['task'];
      $data[$id]['date_start'] = $id;
      $data[$id]['date_end'] = '';
      $data[$id]['date_entered'] = $id;
      $data[$id]['status'] = 1;
      save($data); // Save changes
    break;

  case 'tally':
    $count = 0;
    foreach ($data as $task) {
      $startDate = $task['date_start'];
      $endDate = $task['date_end'];
      $count = $count + ($endDate - $startDate);
    }
    echo time_nice($count);
    break;



    case 'build':
      foreach ($data as $task) {
        $startDate = $task['date_start'];
        $endDate = $task['date_end'];
        ?> <!-- task is holding the information that can then be echoed -->
    <tr>
      <td><?= $task['name'] ?></td>
      <td><?= date_nice($startDate) ?></td>
      <td><?= ($endDate != '') ? date_nice($endDate):'' ?></td>
      <td>
        <?php
          if($endDate == "") {
            $elapsedTime = time() - $startDate; // this will determine how much time was elapse
          }else {
            $elapsedTime = $endDate - $startDate;
          }
          echo time_nice($elapsedTime);
        ?>
      </td>
      <td><button class="btn btn-primary"><?= i('stop')?></button></td>
      <td><button class="btn btn-danger"><?= i('times')?></button></td>
    </tr>
<?php }

      break;

}
