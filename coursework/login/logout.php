<?php
session_start();
if(session_destroy())
{
header("Location: yogitha.azurewebsites.net/coursework/index.php");
}

?>