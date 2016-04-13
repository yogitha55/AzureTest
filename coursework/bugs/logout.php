<?php
session_start();
//session created
if(session_destroy())
{
    header("Location: ../index.php");
}

?>