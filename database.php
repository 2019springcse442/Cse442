<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "cse442_leave_message";

$con = mysqli_connect($server,$username,$password,$dbname);

//Test if connection success
if (mysqli_connect_errno())
{
    echo "Connection Fail: " . mysqli_connect_error();
}




?>