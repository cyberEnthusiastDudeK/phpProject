<?php

session_start();
// Connect to the database
$server = "localhost:3306";
$usname = "root";
$pass   = "";
$d_base ="projectxdatabase";
$db = new mysqli($server, $usname, $pass, $d_base);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if($_SERVER["REQUEST_METHOD"]=='post')
{
// Get user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare query
$query = "SELECT * FROM investors WHERE username = ? AND password = ?";

// Prepare statement
$stmt = $db->prepare($query);

// Bind parameters
$stmt->bind_param('ss', $username, $password);

// Execute statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    // User exists
    echo 'Welcome ' . $username;
} else {
    // User doesn't exist
    
    echo 'Please Register First';
    echo 'The username or password is incorrect.';
}

}
// Close statement
$stmt->close();
?>