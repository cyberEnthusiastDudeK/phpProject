<?php
// Connect to the database
$server = "localhost:3306";
$usname = "root";
$pass   = "";
$d_base ="projectxdatabase";

$db = mysqli_connect($server,$usname,$pass,$d_base);
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
// Retrieve all categories from the database
$sql = "SELECT category_id, name FROM categoriespitcher";
$result = mysqli_query($db,$sql);
 
// Display the categories in a list or dropdown menu
echo "<select>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['category_id'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";
 
// Close the connection
mysqli_close($db);
?>