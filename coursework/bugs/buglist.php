<?php
include("connection.php");
/*$sql="SELECT * FROM bugs WHERE bugs.ID = ".$_GET["id"];
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($result))
{
    $bugtitle = $row['title'];
    $bugID = $row['bugID'];
    $bugdesc = $_POST["desc"];
    $userId = $_POST["userID"];
    $dateposted = $_POST["postDate"];
    $datefixed = $_POST["fixDate"];
    $fixedunfixed = $_POST["fixed"];
}*/


$msg = "";
if(isset($_POST["submit"]))
{
    $bugtitle = $row['title'];
    $useriId = $_POST["userID"];
    $bugdesc = $_POST["desc"];
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

}
?>