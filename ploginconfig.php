<?php

session_start();


$id = "";

$user_mail = " ";

$user_pass = " ";


$server="localhost:3306";
$username = "root";
$password = "";
$database_name = "projectxdatabase";


$con = new mysqli($server,$username,$password,$database_name);

$duplicate = mysqli_query($con, "Select * from pitchers where Email = '$user_mail', and Password = '$user_pass' ");

$row = mysqli_fetch_assoc($duplicate);

if($con->connect_error)
{

die("Connection Failed:" .mysqli_connect_error());


}

if(isset($_POST['plogin']))
{

    $id = $_POST['id'];

    $user_mail = $_POST['email'];

    $user_pass = $_POST['password'];


}

if(mysqli_num_rows($duplicate)> 0)
{
   if($user_pass=$row["password"])
   {
        $_SESSION["login"] = true;
        $_SESSION['id']     = $row['id'];
        header("location: pdashboard.php");

   }


}

else{

   echo
   "<script>Alert('Wrong username or password');</script>";



    
}

 

?>