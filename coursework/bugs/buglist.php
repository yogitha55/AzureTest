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
    $userId = $_POST["userId"];


     echo $bugId." ".$bugtitle." ".$bugdesc." ".$postdate." ".$fixdate." ".$fixed." ".$userId;

    // $postdate = strftime("%b %d, %Y", strtotime($row["postdate"]));
    //$postdate = $row["postdate"];

   // $bugId = mysqli_real_escape_string($db, $bugId);
    $bugtitle= mysqli_real_escape_string($db, $bugtitle);
    $bugdesc = mysqli_real_escape_string($db, $bugdesc);
 //  $postdate = mysqli_real_escape_string($db, $postdate);
   // $fixdate = mysqli_real_escape_string($db, $fixdate);
    //$fixed = mysqli_real_escape_string($db, $fixed);
    //$userId = mysqli_real_escape_string($db, $userId);


    //$query = mysqli_query($db, "INSERT INTO bugs (title, desc )VALUES ('$bugtitle', '$bugdesc')")or die(mysqli_error($db));
    $sql="SELECT *FROM bugs";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$bugtitle = $row['title'];
   // $bugID = $row['ID'];

    $query = mysqli_query($db, "INSERT INTO bugs (bugID, `title`, `desc`, `postDate`, `fixDate`, `fixed`, `userID`)
VALUES ('$bugId', '$bugtitle', '$bugdesc', '$postdate', '$fixdate' , '$fixed', '$userId')")or die(mysqli_error($db));



    if($query)
    {
        $msg = "Thank You! Bug is .";
    }

$target_dir = "attachments/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


}
?>