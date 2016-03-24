<?php

$msg = "";
if(isset($_POST["submit"]))
{
    $value1 = $_POST['bugtitle'];
    $value2 = $_POST["bugdesc"];
    //$useriId = $_POST["userID"];
    //$postdate = strtotime("july 28 2014");
    $postdate = date ("Y");

    $bugtitle= mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);

    //$query = mysqli_query($db, "INSERT INTO bugs (title, desc )VALUES ('$bugtitle', '$bugdesc')")or die(mysqli_error($db));
   // $sql="SELECT *FROM bugs";
    //$result=mysqli_query($db,$sql);
    //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$bugtitle = $row['title'];
    //$bugID = $row['ID'];

    $query = mysqli_query($db, "INSERT INTO `bugs`(bugID, title, desc, postDate, fixDate, fixed, userID)
VALUES ('$value', '$value2', '$value3', '$value4', '$value5', '$value6', '$value7',)")or die(mysqli_error($db));


    if($query)
    {
        $msg = "Thank You! Bug is registered.";
    }

}
?>