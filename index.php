<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atom Tracker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8716b95af6.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fluid">
    <header class="row">
        <div class="col-xs-8">
            <a data-mode="restore" id="btn-swap" href="#">Enter <span>Restore </span>Mode</a>
        </div>
    <div class="col-xs-4 text-right">
          Total Time:<span id="tally"></span>
    </div>
    </header>


      <div class="row">
        <form id="form-new" method="get">
          <div class="form-group">

            <div class="col-xs-10">
              <input id="name" class="form-control" name="name" placeholder="Enter new task name...">
            </div>

            <div class="col-xs-4">
              <button type="submit" name="submit" class="btn btn-block btn-success"><?= i('play')?></button>
            </div>
          </div>
        </form>
      </div>

      <hr>

      <table class="table table-bordered table-stripped">
        <thead>
          <tr>
            <th>Task</th>
            <th>Start</th>
            <th>End</th>
            <th>Time</th>
            <th colspan="2">Controls</th>
          </tr>
        </thead>

        <tbody id="log"></tbody>
      </table>


  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  <!-- App Script -->
  <script src="atom.tracker.js"></script>

</body>
</html>
