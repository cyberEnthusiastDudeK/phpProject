<!DOCTYPE html>
<html>
<head>Invester Registration Successful</head>

<h1>Hello Investor</h1>
 
<?php 
  $configFilePath = "iloginconfig.php";
  if (file_exists($configFilePath)) {
    include_once($configFilePath);
  }
?>
<?php 
  $configFilePath = "categoriesconfig.php";
  if (file_exists($configFilePath)) {
    include_once($configFilePath);
  }
?>

<body>
<p>Thank you for registering with us</p>

<p>Want to Start with some Investment Categories?</p>

</body>


</html>