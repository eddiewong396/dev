<!DOCTYPE html>
 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>

    <body>
        <div id="header">
            <h1>Login</h1>
        </div>
        
        <div id="container">
            <div id="content">
                <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
                    <tr>
                        <form name="form1" method="post" action="check_login.php">
                            <td>
                                <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                                    <tr>
                                        <td colspan="3"><strong>Login Form</strong></td>
                                    </tr>
                                    <tr>
                                        <td width="78">Username</td>
                                            <td width="6">:</td>
                                            <td width="294"><input name="myusername" type="text" id="myusername"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><input name="mypassword" type="text" id="mypassword"/></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><input type="submit" name="Submit" value="Login"/></td>
                                    </tr>
                                </table>
                            </td>
                        </form>
                    </tr>
                </table>
            </div>
        </div>

        <?php
            include("/views/footer.php")
        ?>
        