<?php
include("connection.php");

$msg = "";
if(isset($_POST["submit"]))
{
    $bugtitle = $_POST['bugtitle'];
    $useriId = $_POST["userID"];
    $bugdesc = $_POST["bugdesc"];
    $bugId = $_POST["bugID"];
    $postdate = $_POST["postDate"];
    $fixdate = $_POST["fixDate"];
    $fixed = $_POST["fixed"];

   $bugtitle= mysqli_real_escape_string($db, $bugtitle);
    $userid = mysqli_real_escape_string($db, $userId);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);
    $userId = mysqli_real_escape_string($db, $userId);
    $postdate = mysqli_real_escape_string($db, $postdate);
    $fixdate = mysqli_real_escape_string($db, $fixdate);
    $fixed = mysqli_real_escape_string($db, $fixed);



    $sql="SELECT * FROM bugs WHERE bugs.ID=".$_GET["id"];
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    $query = mysqli_query($db, "INSERT INTO bugs (title, desc)VALUES ('$bugtitle', '$bugdesc')")or die(mysqli_error($db));
    if($query)
    {

        $msg = "Thank You! Bug has been created in the database.";
        $msg = $msg + $login_user;
    }

}
?>