<?php
include_once 'classes/Database.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $query = '';
  $sqlScript = file('KratosKnife.sql');
  $datbase = new Database;
  $pdo = $datbase->Connect();
  foreach ($sqlScript as $line) {
    $startWith = substr(trim($line), 0, 2);
    $endWith = substr(trim($line), -1, 1);
    if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
      continue;
    }
    $query = $query . $line;
    if ($endWith == ';') {
      $stmt = $pdo->query($query) or die('Problem in executing the SQL query <b>' . $query . '</b></div>');
      $query = '';
    }
  }
  $msg = 'SQL file imported successfully';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'components/meta.php'; ?>
  <title>KratosKnife - Installation</title>
  <?php include_once 'components/css.php'; ?>

<style type="text/css">
	img {
		display : block;
		margin : 0 auto;
	}
</style>
</head>

<body class="bg-dark">
	<img src="banner.png" alt="Login Page Image" width=410 height=316>
  <div class="container pt-3">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Install</div>
      <div class="card-body">
        <form method="POST">
          <?php if (isset($msg)) : ?>
            <div class="alert alert-success"><?php echo $msg ?></div>
          <?php endif; ?>
          <div class="alert alert-primary text-center border-primary">
            <p class="lead h2">
              <b>This page going to install KratosKnife default settings<br>
                <hr>
                <p class="h3">admin login details</p>
                <ul class="list-unstyled h4">
                  <li class="">Username: admin</li>
                  <li class="">Password: admin</li>
                </ul>
                <hr />
                <p>Please change the admin information for better security.</p>
              </b></p>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Start Installation</button>
        </form>
      </div>
    </div>
  </div>
  <?php include_once 'components/js.php'; ?>

</body>

</html>