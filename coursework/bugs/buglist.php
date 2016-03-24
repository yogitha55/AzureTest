<?php

$msg = "";
if(isset($_POST["submit"]))
{
     $bugId = $_POST["bugId"];
     $bugtitle = $_POST["bugtitle"];
     $bugdesc = $_POST["bugdesc"];
      $userid = $_POST["userId"];


       if($bugtitle == null)
       {
          echo $bugtitle;
          $bugtitle = 'jdssdj';
       }




    //$query = mysqli_query($db, "INSERT INTO users_old (`bugID`, `title`, `desc`,`userID`,`postDate`) VALUES ( default,'$bugtitle', '$bugdesc', default, NULL )")or die(mysqli_error($db));

        $query = mysqli_query($db, "INSERT INTO bugs (`bugID`, `title`, `desc`, `userID`, `postDate`, `fixDate`, `fixed`) VALUES ( default,'$bugtitle', '$bugdesc', '$userId', NULL, NULL, NULL )")or die(mysqli_error($db));


     $sql="SELECT budID FROM bugs WHERE title='$bugtitle'  and userID='$userId'";
     $result=mysqli_query($db,$sql);
     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

     


    if($query)
    {
        $msg = "Thank You! Bug is .";
    }


}
?>