<?php
/**
 * Created by PhpStorm.
 * User: 0917852
 * Date: 15/03/2016
 * Time: 20:09
 */
include("connection.php");
if(empty($_POST["username"]) || empty($_POST["password"]))
{
    $echo = "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";

    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) == 1)
    {
        header("location: home.php"); // Redirecting To another Page
    }else
    {
        $echo "Incorrect username or password.";
        }

}
?>