<?php
session_start();
//if user doesnot want to access bug page they can logout
if(session_destroy())
{
header("Location: ../index.php");
}

?>