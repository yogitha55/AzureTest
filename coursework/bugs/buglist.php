<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bugs List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="content">
    <?php
    include("connection.php");
$sql="SELECT *FROM bugs WHERE bugs.ID=".$_GET["id"];
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_assoc($result);
    $bugTitle =$row["title"];
    $bugID=$row["ID"];
    $bugDesc=$row['desc'];
    echo"<h2>".$bugTitle."</h2>";
    echo"<p>".$bugDesc."</p>";
    $sql="SELECT *FROM comments WHERE bugID =".$_GET["id"];
    $result=mysqli_query($db,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $commentTitle=$row['title'];
        $comment=$row['comment'];
        echo'<h3>'.$title.'</h3>';
        echo'<p>'.$comment.'</p>';


    }
    ?>
    </div>
</body>
</html>
