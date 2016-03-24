<?php

$msg = "";
if(isset($_POST["submit"]))
{
    $bugId = $_POST["bugId"];
    $bugtitle = $_POST["bugtitle"];
    $bugdesc = $_POST["bugdesc"];
    //$postdate = strtotime("july 28 2014");
    $postdate = $_POST['Y-m-d H:i:s'];
    $fixdate = $_POST['Y-m-d H:i:s'];
    $fixed = $_POST["fixed"];
    $useriId = $_POST["userId"];




    // $postdate = strftime("%b %d, %Y", strtotime($row["postdate"]));
    //$postdate = $row["postdate"];

    $bugId = mysqli_real_escape_string($db, $bugId);
    $bugtitle= mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);
    $postdate = mysqli_real_escape_string($db, $postdate);
    $fixdate = mysqli_real_escape_string($db, $fixdate);
    $fixed = mysqli_real_escape_string($db, $fixed);
    $userId = mysqli_real_escape_string($db, $userId);


    //$query = mysqli_query($db, "INSERT INTO bugs (title, desc )VALUES ('$bugtitle', '$bugdesc')")or die(mysqli_error($db));
   /* $sql="SELECT *FROM bugs";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $bugtitle = $row['title'];
    $bugID = $row['ID'];*/

    $query = mysqli_query($db, "INSERT INTO bugs (`bugID`, `title`, `desc`, `postDate`, `fixDate`, `fixed`, `userID`)
VALUES ('bugId', '$bugtitle', '$bugdesc', '$postdate', '$fixdate' , 'fixed', 'userId')")or die(mysqli_error($db));



    if($query)
    {
        $msg = "Thank You! Bug is registered.";
    }

}
?>