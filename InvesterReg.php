<!DOCTYPE html>
<html>

<head>User Registration </head>

<title>Registratiion form</title>

<div>

<?php
$id = " ";
$name = "";
$toi  = "";
$investedamt    =   "";
$project     =   "";
$projectowner =  "";
$mobile_no = " ";
$be        = " ";
$password  = " ";
//session_start();
$server="localhost:3306";
$username = "root";
$password = "";
$database_name = "projectxdatabase";

$con = new mysqli($server,$username,$password,$database_name);
//$con = mysqli_connect("$server","$username","$password","$database_name");

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
      // collect value of input field
      $data = $_REQUEST['val1'];
   
      if (empty($data)) {
          echo "data is empty";
      } else {
          echo $data;
      }
  }*/ 


if($con->connect_error)
{

die("Connection Failed:" .mysqli_connect_error());


}


 if(isset($_REQUEST['Submit']))
 {
       //$id    =      $_REQUEST['id'];
       $name = $_REQUEST['name'];
       $mobile_no = $_REQUEST['mobno'];
       $be        = $_REQUEST['be'];

       $toi  = $_REQUEST['toi'];
       $investedamt    =   $_REQUEST['ia'];
       $project     =   $_REQUEST['pro'];
       $projectowner =   $_REQUEST['prown'];
       $password =   $_REQUEST['password'];
       //$gender   =  $_POST['ispitcher'];


 }
 $sql = "INSERT INTO Investers  VALUES ('$id','$name','$mobile_no','$be','$toi','$investedamt','$project','$projectowner','$password')";

 if ($con->query($sql)==TRUE)
 {
    echo("Details Entered Successfully");

 }
 else {
      echo("Error:".$sql."".mysqli_error($con));
 }
 
 mysqli_close($con);
 
?>
</div>

<div>






</html>