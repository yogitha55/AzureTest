<?php

$msg = "";
if(isset($_POST["submit"]))
{
    // Define $username and $password
      $bugId = $_POST["bugId"];
      $bugtitle = $_POST["bugtitle"];
      $bugdesc = $_POST["bugdesc"];
      $userid = $_POST["userId"];
      $comment = $_POST["comment"];
      $attachmentId = $_POST["attachmentId"];
      $fileToUpload = $_POST["fileToUpload"];

//Check username and password from database table called bugs
    $query = mysqli_query($db, "INSERT INTO bugs (`bugID`, `title`, `desc`, `userID`, `postDate`, `fixDate`, `fixed`) VALUES ( default,'$bugtitle', '$bugdesc', '$userid', NULL, NULL, NULL )")or die(mysqli_error($db));


     $sql="SELECT bugID FROM bugs WHERE title='$bugtitle'  and userID='$userid'";
     $result=mysqli_query($db,$sql);
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

      $bug_id=$row['bugID'];
//Check username and password from database name called comments
      $query = mysqli_query($db, "INSERT INTO comments (`commentID`,`desc`, `userID`, `postDate`, `bugID`) VALUES ( default, '$comment', '$userid', NULL, '$bug_id' )")or die(mysqli_error($db));

//create a session if bug is successful create asession
    if($query)
    {
       header('Location: http://yogitha.azurewebsites.net/coursework/bugs/bugsuccess.php');
    }

////Check username and password from database called attachments
    $query = mysqli_query($db, "INSERT INTO attachments (`attachmentID`,`URL`, `userID`, `bugID`) VALUES ( default, '$fileToUpload', '$userid', NULL, '$bug_id' )")or die(mysqli_error($db));


    echo "<br>File $fileName uploaded<br>";

}

?>