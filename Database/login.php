<?php
session_start();
$error='';
if (isset($_POST['Login'])){
    if (empty($_POST['email'])|| empty($_POST['password'])){
        $error = "Email or Password is invalid";
    }
    else
    {
        $email=$_POST['username'];
        $password=$_POST['password'];
        $connection = mysql_connect("localhost", "root", "");
        
        $email = stripslashes($email);
        $password = stripslashes($password);
        $email = mysql_real_escape_string($email);
        $password = mysql_real_escape_string($password);

        $db = mysql_select_db("cfUsers", $connection);

        $query = mysql_query("select * from login where email='$email' AND password='$password'", $connection);
        $rows = mysql_num_rows($query);

        if ($rows == 1) {
            $_SESSION['login_user']=$username;
            header("location: userhome.html");
        } else {
            $error = "Username or Password is invalid";
        }
        mysql_close($connection); // Closing Connection
    }
}
?>