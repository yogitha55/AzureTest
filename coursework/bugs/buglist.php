<?php

$msg = "";
if(isset($_POST["submit"]))
{
   $bugId = $_POST["bugId"];
    $bugtitle = $_POST["bugtitle"];
    $bugdesc = $_POST["bugdesc"];
    //$postdate = strtotime("july 28 2014");
 //   $postdate = $_POST['Y-m-d H:i:s'];
   // $fixdate = $_POST['Y-m-d H:i:s'];
    //$fixed = $_POST["fixed"];
      $userId = $_POST["userId"];


    // echo $bugId." ".$bugtitle." ".$bugdesc." ".$postdate." ".$fixdate." ".$fixed." ".$userId;

    // $postdate = strftime("%b %d, %Y", strtotime($row["postdate"]));
    //$postdate = $row["postdate"];

   $bugId = mysqli_real_escape_string($db, $bugId);
  $bugtitle= mysqli_real_escape_string($db, $bugtitle);
     $bugdesc = mysqli_real_escape_string($db, $bugdesc);
   $postdate = mysqli_real_escape_string($db, $postdate);
    $fixdate = mysqli_real_escape_string($db, $fixdate);
    $fixed = mysqli_real_escape_string($db, $fixed);
    $userId = mysqli_real_escape_string($db, $userId);
    

       echo $bugtitle;


    //$query = mysqli_query($db, "INSERT INTO bugs (title, desc )VALUES ('$bugtitle', '$bugdesc')")or die(mysqli_error($db));
   // $sql="SELECT *FROM users_old";
    //$result=mysqli_query($db,$sql);
    //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    //$bugtitle = $row['title'];
   // $bugID = $row['userID'];



    //$query = mysqli_query($db, "INSERT INTO users_old (`bugID`, `title`, `desc`,`userID`,`postDate`) VALUES ( default,'$bugtitle', '$bugdesc', default, NULL )")or die(mysqli_error($db));

        $query = mysqli_query($db, "INSERT INTO bugs (`bugID`, `title`, `desc`, `userID`, `postDate`, `fixDate`, `fixed`) VALUES ( default,'$bugtitle', '$bugdesc', 12, NULL, NULL, NULL )")or die(mysqli_error($db));



    if($query)
    {
        $msg = "Thank You! Bug is .";
    }


}
?>