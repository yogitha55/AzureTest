<?php

$msg = "";
if(isset($_POST["submit"]))
{
    $bugtitle = $_POST["bugtitle"];
    $bugdesc = $_POST["bugdesc"];
    //$useriId = $_POST["userID"];
    //$postdate = strtotime("july 28 2014");
    $postdate = $_POSTdate ['YYYY-MM-DD'];
    // $postdate = strftime("%b %d, %Y", strtotime($row["postdate"]));
    //$postdate = $row["postdate"];

    $bugtitle= mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);

    //$query = mysqli_query($db, "INSERT INTO bugs (title, desc )VALUES ('$bugtitle', '$bugdesc')")or die(mysqli_error($db));
   /* $sql="SELECT *FROM bugs";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $bugtitle = $row['title'];
    $bugID = $row['ID'];*/

    $query = mysqli_query($db, "INSERT INTO `bugs` (`bugID`, `title`, `desc`, `postDate`, `fixDate`, `fixed`, `userID`)
VALUES ('2', '$bugtitle', '$bugdesc', '$postdate', '$fixdate', NULL, '123')")or die(mysqli_error($db));


    if($query)
    {
        $msg = "Thank You! Bug is registered.";
    }

}
?>