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
                    <div align="right"><label for="name">Bug Title</label></div>
                </td>
                <td>
                    <input name="bugtitle" type="text" class="input" size="70" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="bugdescription">Bug Description</label>
                    </div>
                </td>
                <td>
                    <input name="bugdesc" type="text" class="input" size="25" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="userthatpostederror">User that posted error</label>
                    </div>
                </td>
                <td>
                    <input name="userId" type="number" class="input" size="20" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="date posted">Date Posted</label>
                    </div>
                </td>
                <td>
                    <input name="dateposted" type="datetime-local" class="input" size="20" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="date fixed">Date Fixed</label>
                    </div>
                </td>
                <td>
                    <input name="datefixed" type="datetime-local" class="input" size="20" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="Fixed/unfixed">Fixed/Unfixed</label>
                    </div>
                </td>
                <td>
                    <input name="fixedunfixed" type="number" class="input" size="20" required />
                </td>
            </tr>

        </table>
        <section>
            <h1>Comments</h1>
            <table>
                <tr>
                    <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
                </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right"><label for="name">Comment Text</label></div>
                </td>
                <td>
                    <input name="commenttext" type="text" class="input" size="70" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="usercommented">User Commented</label>
                    </div>
                </td>
                <td>
                    <input name="usercommented" type="userId" class="input" size="11" required />

                </td>
            </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="dateposted">Date Posted</label>
                        </div>
                    </td>
                    <td>
                        <input name="dateposted" type="datetime-local" class="input" size="11" required />

                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="bugthecommentbelongsto">Bug the comments belongs to</label>
                        </div>
                    </td>
                    <td>
                        <input name="bugthecommentbelongsto" type="text" class="input" size="25" required />

                    </td>
                </tr>

                </table>
        </section>
        <section>
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
