<?php

$msg = "";
if(isset($_POST["submit"]))
{
     $bugId = $_POST["bugId"];
     $bugtitle = $_POST["bugtitle"];
     $bugdesc = $_POST["bugdesc"];


       if($bugtitle == null)
       {
          echo $bugtitle;
          $bugtitle = 'jdssdj';
       }




    //$query = mysqli_query($db, "INSERT INTO users_old (`bugID`, `title`, `desc`,`userID`,`postDate`) VALUES ( default,'$bugtitle', '$bugdesc', default, NULL )")or die(mysqli_error($db));

        $query = mysqli_query($db, "INSERT INTO bugs (`bugID`, `title`, `desc`, `userID`, `postDate`, `fixDate`, `fixed`) VALUES ( default,'$bugtitle', '$bugdesc', 12, NULL, NULL, NULL )")or die(mysqli_error($db));



    if($query)
    {
        $msg = "Thank You! Bug is .";
    }


}
?>