<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Student Sign Up </title>
</head>
<body>

<?php

//MySQL connection parameters. Remains the same for all connections to the database
$servername = "phulmoonshoots.com";
$username = "Harmanjeet";
$password = "semicoloN.1984";
$dbname = "student_signups";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Select database
mysqli_select_db ($conn , $dbname);

// SQL statement to insert form posted data into table:course and store statement in a variable $sql
// the variable parameters on the right are inside the $_POST are received from the form.
// Code below is an example.

$sql = "INSERT INTO dorm_reviews set 
STU_FNAME = '$_POST[fname]',
LAST_NAME = '$_POST[lname]',
EMAIL = '$_POST[email]',
DORM_HALL = '$_POST[hall]'";

// Insert SQL data in MySQL database table
mysqli_query($conn, $sql);

// Display confirmation
echo "Your new review has been created. <br>";

// Close connection
mysqli_close($conn);
?>
</span>

</body>
</html>