<html>
<p>
<?php
echo "hello"."world";
echo 5*6;
$myname = "yogitha alapati";
$myage = 56;
echo "my name is" . $myname . "and i am" .$myage;

?>
</p>
<p>
<?php
$name = "yogitha";
if($name == "pujitha")
{
    print "i know you";
}
else {
    print "who are you";
}
?>
</p>
<p>
    <?php
    $myage = 25;
    switch ($myage)
    {
        case 1:
            echo "•	buy specs if you are over 16";
        case 2:
            echo "•	buy mugs if you are over 18";
        case 3:
            echo "buy sausage rolls if you are over 21";
        default:
            echo "if you are under 16 you are not allowed to buy";
    }
    ?>
</p>

</body>
</html>
