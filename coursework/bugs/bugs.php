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

<!--BUGS fields-->
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
          <!-- Comments Fields -->
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
        <!--attachments fields-->
            <section>
            <h1>Attachments</h1>
            <table>
                <tr>
                        <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
                    </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right"><label for="name">Attachment Id</label></div>
                    </td>
                    <td>
                       <input name="AttachmentId" type="number" class="input" size="8" required>

                    </td>
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
                <tr>
                    <td style="font-weight: bold">
                        <div align="right"><label for="name">User Id</label></div>
                    </td>
                    <td>
                        <input name="userId" type="number" readonly class="input" size="8" value="<?php echo $login_user;?>">

                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right"><label for="name">Bug Id</label></div>
                    </td>
                    <td>
                        <input name="bugId" type="number" class="input" size="8" required>

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
                </section>

    </fieldset>
</form>
</body>
</html>
