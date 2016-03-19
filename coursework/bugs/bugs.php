<?php

include("connection.php");
include("submit.php");

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>BugsList</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form method="post" action="">
    <fieldset>
        <legend>BugsList</legend>
        <table width="400"  border="0" cellpadding="10" cellspacing="10">
            <tr>
                <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="name">Bug Title</label></div>
                </td>
                <td>
                    <input name="name" type="text" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="email">Bug Description</label>
                    </div>
                </td>
                <td>
                    <input name="bugdescription" type="text" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="userthatpostederror">User that posted error</label>
                    </div>
                </td>
                <td>
                    <input name="userthatpostederror" type="text" class="input" size="20" required />
                </td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold">
                    <div align="right">
                        <label for="password">Password</label>
                    </div>
                </td>
                <td>
                    <input name="password" type="password" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td height="23"></td>
                <td>
                    <div align="right">
                        <input type="submit" name="submit" value="Register" />
                    </div>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>