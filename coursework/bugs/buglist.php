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

    $target_dir = "bugs.php/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
    }
}
?>