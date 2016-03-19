<?php
$msg = "";
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $userid = $_POST["userid"];
    $password = $_POST["password"];

    $userid = mysqli_real_escape_string($db, $userid);
    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $phone = mysqli_real_escape_string($db, $phone);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);


    $sql="SELECT email FROM users WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $query = mysqli_query($db, "INSERT INTO users (userid, username, email, phone, password)VALUES ('$userId',''$name', '$email', '$phone' '$password')")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.";
        }

    }
}
?>