<?php

include("connection.php");
include("buglist.php");
include("check.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>BugsList</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<!--BUGS INFORMATION-->
<body>
<form method="post" action="">
    <fieldset>
        <h1>BugsList</h1>
        <table>
            <tr>
                <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="bugId">Bug Id</label></div>
                </td>
                <td>
                    <input name="budId" type="number" class="input" size="10" required>
                </td>
            </tr>

            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="name">Bug Title</label></div>
                </td>
                <td>
                    <input name="bugtitle" type="text" class="input" rows="10" size="50" required>
                </td>
            </tr>

            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="bugdescription">Bug Description</label>
                    </div>
                </td>
                <td>
                    <textarea name="bugdesc" rows="5" columns="20" required></textarea>

                </td>
            </tr>

            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="date posted">Date Posted</label>
                    </div>
                </td>
                <td>
                    <input name="postdate" type="datetime" class="input" size="8" required>
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="date fixed">Date Fixed</label>
                    </div>
                </td>
                <td>
                    <input name="fixdate" type="datetime" class="input" size="8" required>
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="Fixed">Fixed</label>
                    </div>
                </td>
                <td>
                    <input name="fixed" type="number" class="input" size="8" required >
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="userId">User Id</label></div>
                </td>
                <td>
                    <input name="userId" type="number" readonly class="input" size="8" value="<?php echo $login_user;?>">
                </td>
            </tr>
        </table>

            <h1>Comments</h1>
            <table>
                <tr>
                    <td colspan="2" align="right" class="error"><?php echo $msg;?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right"><label for="name">Comment </label></div>
                    </td>
                    <td>
                        <textarea name="comment" rows="5" columns="20" required></textarea>

                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="usercommented">User Id</label>
                        </div>
                    </td>
                    <td>
                        <input name="userId" type="number" readonly class="input" size="8" value="<?php echo $login_user;?>">
                    </td>
                </tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="bugid">Bug Id</label>
                    </div>
                </td>
                <td>
                    <input name="bugId" type="number" class="input" size="8" required>

                </td>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="dateposted">Date Posted</label>
                        </div>
                    </td>
                    <td>
                        <input name="dateposted" type="datetime" class="input" size="11" required>

                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="commentId">Comment Id</label>
                        </div>
                    </td>
                    <td>
                        <input name="commentId" type="number" class="input" size="8" required>
                    </td>
                </tr>
            </table>


            <h1>Attachments</h1>
            <table>
                <tr>
                        <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold">
                            <div align="right"><label for="name">File Upload</label></div>
                        </td>
                        <td>
                            <input type="file" type="fileToUpload" id="fileToUpload" required>
                            <input type="submit" value="Upload Image" name="submit">
                        </td>
                    </tr>
                <br>
                <br>
                    <tr>
                        <td height="23"></td>
                        <td>
                            <div align="right">
                                <input type="submit" name="submit" value="BugRegister" />
                            </div>
                        </td>
                    </tr>
                </table>
        <body>

        <form method="post" enctype="multipart/form-data">
            Select file to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </form>

        <?php
        if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
        {
            $fileName = $_FILES['userfile']['name'];
            $tmpName  = $_FILES['userfile']['tmp_name'];
            $fileSize = $_FILES['userfile']['size'];
            $fileType = $_FILES['userfile']['type'];

            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            $content = addslashes($content);
            fclose($fp);

            if(!get_magic_quotes_gpc())
            {
                $fileName = addslashes($fileName);
            }

            include 'connection.php';

            $query = "INSERT INTO upload (name, size, type, content ) ".
                "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";


            echo "<br>File $fileName uploaded<br>";
        }
        ?>

        </body>

    </fieldset>
</form>
</body>
</html>
