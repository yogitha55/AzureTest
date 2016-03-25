<?php

$msg = "";
if(isset($_POST["submit"]))
{
     $bugId = $_POST["bugId"];
     $bugtitle = $_POST["bugtitle"];
     $bugdesc = $_POST["bugdesc"];
      $userid = $_POST["userId"];
       $comment = $_POST["comment"];



    //$query = mysqli_query($db, "INSERT INTO users_old (`bugID`, `title`, `desc`,`userID`,`postDate`) VALUES ( default,'$bugtitle', '$bugdesc', default, NULL )")or die(mysqli_error($db));

        $query = mysqli_query($db, "INSERT INTO bugs (`bugID`, `title`, `desc`, `userID`, `postDate`, `fixDate`, `fixed`) VALUES ( default,'$bugtitle', '$bugdesc', '$userid', NULL, NULL, NULL )")or die(mysqli_error($db));


     $sql="SELECT bugID FROM bugs WHERE title='$bugtitle'  and userID='$userid'";
     $result=mysqli_query($db,$sql);
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

      $bug_id=$row['bugID'];

      $query = mysqli_query($db, "INSERT INTO comments (`commentID`,`desc`, `userID`, `postDate`, `bugID`) VALUES ( default, '$comment', '$userid', NULL, '$bug_id' )")or die(mysqli_error($db));


    if($query)
    {
       header('Location: http://yogitha.azurewebsites.net/coursework/bugs/bugsuccess.php');
    }


}
?>