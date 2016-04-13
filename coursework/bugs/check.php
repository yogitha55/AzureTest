<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];
//create new session

$ses_sql = mysqli_query($db,"SELECT userID FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_user=$row['userID'];

if(!isset($user_check))
{
header("Location: register.php");
}
?>