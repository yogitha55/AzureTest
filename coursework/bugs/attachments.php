<?php

include("connection.php");
include("buglist.php");

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>BugsList</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!--Attachments Information-->
<body>
<form method="post" action="">
    <fieldset>
            <h1>Attachments</h1>
            <table>

                <table width="400"  border="0" cellpadding="10" cellspacing="10">
                    <tr>
                        <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">
                            <div align="right"><label for="name">File Upload</label></div>
                        </td>
                        <td>
                            <input name="fileToUpload" type="file" id="fileToUpload"class="input">
                            <input type="submit" value="Upload File" name="submit">
                        </td>
                    </tr>
                    <tr>
                    <tr>

                    <tr>
                        <td height="23"></td>
                        <td>
                            <div align="left">
                                <a href="comments.php">Back</a>
                                </div>
                            <div align="right">
                               
                                <input type="submit" name="submit" value="BugRegister" />

                            </div>
                        </td>
                    </tr>
                </table>

    </fieldset>
</form>
</body>
</html>
