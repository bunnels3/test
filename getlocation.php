<?php
include_once 'session.php';

?>

<!DOCTYPE html>
<html>

<head>
  <?php include_once 'components/meta.php'; ?>
  <title>KratosKnife - View Location On Map</title>
  <?php include_once 'components/css.php'; ?>
  <link href="asset/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="asset/vendor/responsive/css/responsive.dataTables.css" rel="stylesheet">
  <link href="asset/vendor/responsive/css/responsive.bootstrap4.css" rel="stylesheet">
</head>

<body id="page-top">
  <?php include_once 'components/header.php'; ?>
  <div id="wrapper">
    <div id="content-wrapper">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Back To Command Menu</a>
          </li>
        </ol>

<?php

$latitude = htmlentities($_GET['latitude'], ENT_QUOTES, 'UTF-8');
$longitude = htmlentities($_GET['longitude'], ENT_QUOTES, 'UTF-8');

if($_GET){

print ('<h3>View Location On MAP:</h3>
<form action="" method="get">
<br>Enter Latitude & Longitude :
<input type="text" name="latitude" id="latitude" placeholder="latitude" />
<input type="text" name="longitude" id="longitude" placeholder="longitude" />
<input type="submit" class="button" value="Go to this Location" /><br/><br/>
</form>');

echo "<iframe src='https://developers-dot-devsite-v2-prod.appspot.com/maps/documentation/utils/geocoder?hl=pt-br#q%3D{$latitude}%2520{$longitude}' width='100%' height='900' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe>";
}

else {

print ('<h3>View Location On MAP:</h3>
<form action="" method="get">
<br>Enter Latitude & Longitude:
<input type="text" name="latitude" id="latitude" placeholder="latitude" />
<input type="text" name="longitude" id="longitude" placeholder="longitude" />
<input type="submit" class="button" value="Go to this Location" /><br/><br/>
</form>');

}
				
?>
  <br/><br/>
  <?php include_once 'components/footer.php'; ?>

  <?php include_once 'components/js.php'; ?>

  <script src="asset/vendor/datatables/jquery.dataTables.js"></script>
  <script src="asset/vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="asset/vendor/responsive/dataTables.responsive.js"></script>
  <script src="asset/vendor/responsive/responsive.bootstrap4.js"></script>
  <script src="asset/js/demo/datatables-demo.js"></script>
</body>

</html>