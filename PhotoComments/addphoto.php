<?php

ini_set('session.cookie_httponly', true);
session_start();
if(isset($_SESSION['last_ip']) === false)
{
    $_SESSION['last_ip'] = $_SERVER['REMOTE_ADDR'];
}
if($_SESSION['last_ip'] !== $_SERVER['REMOTE_ADDR'])
{
    session_unset();
    session_destroy();
}

include("connection.php"); //Establishing connection with our database


$msg = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
    //Preventing from cross site scripting
    //Santize the data before it pass through in Title
    $title = htmlentities($_POST["title"]);
    //Santize the data before it pass through in Desc
    $desc = htmlentities($_POST["desc"]);
    $url = "test";
    $name = $_SESSION["username"];



    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $uploadOk = 1;



    $sql="SELECT userID FROM users WHERE username='$name'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    //Check if file already exists

   /* if(file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }*/

    // Check if image file is a original or fake

       /* $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image -" . $check["mime"] . ".";
            $uploadOk = 1;
        }
        else{
            echo "File is not an image.";
            $uploadOk = 0;
        }*/


    //limit file size
    /*if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    else
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        } */
        else

    if(mysqli_num_rows($result) == 1) {
        //$timestamp = time();
        //$target_file = $target_file.$timestamp;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $id = $row['userID'];

            $addsql = "INSERT INTO photos (title, description, postDate, url, userID) VALUES ('$title','$desc',now(),'$target_file','$id')";
            $query = mysqli_query($db, $addsql) or die(mysqli_error($db));


            if ($query) {
                $msg = "Thank You! The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. click <a href='photos.php'>here</a> to go back";
            }

        } else {
            $msg = "Sorry, there was an error uploading your file.";
        }

    }
    //echo $name." ".$email." ".$password;

      else
      {
          $msg = "you need to login first";
      }

}

?>