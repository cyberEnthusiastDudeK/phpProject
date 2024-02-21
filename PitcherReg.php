<!DOCTYPE html>
<html>

<head>User Registration </head>

<title>Registratiion form</title>

<div>

<?php
$id = " ";
$first_name = "";
$last_name  = "";
$email    =   "";
$pass     =   "";
$mobileno =  "";
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
       $id    =      $_REQUEST['id'];
       $first_name = $_REQUEST['firstname'];
       $last_name  = $_REQUEST['lastname'];
       $email    =   $_REQUEST['email'];
       $pass     =   $_REQUEST['password'];
       $mobileno =   $_REQUEST['phoneno'];
       //$gender   =  $_POST['ispitcher'];


 }
 $sql = "INSERT INTO Pitchers  VALUES ('$id','$first_name','$last_name','$email','$pass','$mobileno')";

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