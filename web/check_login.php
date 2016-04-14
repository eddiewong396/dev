<?php
    $host="ec2-23-21-255-14.compute-1.amazonaws.com"; // Host name
    $username="uksylksjjezsif"; // Mysql username
    $password="hs_6PoyzBubhGXxupSatyHxjGp"; // Mysql password
    $db_name="d4at4d6tbtto79"; // Database name
    $tbl_name="test"; // Table name

    // Connect to server and select database.
    $conn = mysql_connect("$host", "$username", "$password") or die("cannot connect");
    mysql_select_db("$db_name")or die("cannot select DB");
 
    // username and password sent from form
    $myusername=$_POST['myusername'];
    $mypassword=$_POST['mypassword'];

    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);

    //$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
    //$result=mysql_query($sql);

    //$count=mysql_num_rows($result);

    if(!$conn) {
        echo "Wrong Username or Password";
    } else {
        session_register("myusername");
        session_register("mypassword");
        header("location:login_success.php");
    }

?>