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
                    <input name="name" type="text" class="input" size="70" required />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="bugdescription">Bug Description</label>
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
                    <input name="fixed/unfixed" type="text" class="input" size="20" required />
                </td>
            </tr>
            <tr>
                <td height="23"></td>
                <td>
                    <div align="right">
                        <!--<input type="submit" name="submit" value="Register" />-->

                        <a href="http://yogitha.azurewebsites.net/coursework/bugs/comments.php">User Comments</a>

                    </div>
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
    </fieldset>
</form>
</body>
</html>
