<?php

$msg = "";
if(isset($_POST["submit"]))
{
    $bugtitle = $_POST['bugtitle'];
    $bugdesc = $_POST["bugdesc"];


   $bugtitle= mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);

    $query = mysqli_query($db, "INSERT INTO bugs (title, desc )VALUES ('bugtitle',  '$bugdesc')")or die(mysqli_error($db));
    if($query)
    {
        $msg = "Thank You! you are now registered.";
    }

}
?>