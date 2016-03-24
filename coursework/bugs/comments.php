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

<!--Comments Informataion-->
<body>
<form method="post" action="">
    <fieldset>
        <h1>Comments</h1>
            <table>
                <tr>
                    <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right"><label for="name">Comment </label></div>
                    </td>
                    <td>
                        <textarea name="comment" rows="5" columns="20" ></textarea>

                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="usercommented">User Id</label>
                        </div>
                    </td>
                    <td>
                        <input name="userId" type="int" class="input" size="8" >

                    </td>

                </tr>
                <td style="font-weight: bold">
                    <div align="right">
                        <label for="bugid">Bug Id</label>
                    </div>
                </td>
                <td>
                    <input name="bugId" type="number" class="input" size="8" >

                </td>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="dateposted">Date Posted</label>
                        </div>
                    </td>
                    <td>
                        <input name="dateposted" type="datetime-local" class="input" size="11" >

                    </td>
                </tr>
                <tr>
                    <td style="font-weight: bold">
                        <div align="right">
                            <label for="commentId">Comment Id</label>
                        </div>
                    </td>
                    <td>
                        <input name="commentId" type="number" class="input" size="8" >

                    </td>

                    </tr>
                <tr>
                <tr>
                    <td height="23"></td>
                    <td>
                        <div align="left">

                            <a href="coursework/bugs/bugs.php">Back</a>


                        </div>
                    </td>
                </tr>
                <tr>
                    <td height="23"></td>
                    <td>
                        <div align="right">

                            <a href="coursework/bugs/attachments.php">Attachments</a>


                        </div>
                    </td>
                </tr>

            </table>


    </fieldset>
</form>
</body>
</html>

