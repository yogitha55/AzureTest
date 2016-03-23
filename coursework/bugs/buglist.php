<?php
include("connection.php");
$sql="SELECT * FROM bugs WHERE bugs.ID = ".$_GET["id"];
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
}


/*//$msg = "";
if(isset($_POST["submit"]))
{
    $userid = $_POST["userid"];
    $bugdesc = $_POST["bugdesc"];
    $userId = $_POST["userId"];
    $dateposted = $_POST["dateposted"];
    $datefixed = $_POST["datefixed"];
    $fixedunfixed = $_POST["fixedunfixed"];


    $userid = mysqli_real_escape_string($db, $userid);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);
    $userId = mysqli_real_escape_string($db, $userId);
    $dateposted = mysqli_real_escape_string($db, $dateposted);
    $datefixed = mysqli_real_escape_string($db, $datefixed);
    $fixedunfixed = mysqli_real_escape_string($db, $datefixed);



    $sql="SELECT * FROM bugs WHERE bugs.ID=".$_GET["id"];
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        // echo $name." ".$email." ".$password;

        $query = mysqli_query($db, "INSERT INTO users (userID, username, email,  password, phone)VALUES ('$userid', '$name', '$email',  '$password', '$phone')")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.";
        }

    }
}*/
?>