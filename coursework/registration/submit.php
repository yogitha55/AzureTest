<?php
$msg = "";
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];

    $name = mysqli_real_escape_string($db, $name);
    $email = mysqli_real_escape_string($db, $email);
    $phonenumber = mysqli_real_escape_string($db, $phonenumber);
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
        $query = mysqli_query($db, "INSERT INTO users (username, email, phonenumber, password)VALUES ('$name', '$email', '$phonenumber' '$password')")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.";
        }

    }
}
?>