<?php

session_start();
if (isset($_SESSION['username'])) {
    header('Location: search.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login page</title>
    </head>
    <body style='background-color: black; text-align: center; color:gray;'>
        <img src='images/matrix.jpg' width="100%" height="300" />
        <form action='.' method='POST'>
            <p><b><u>Matrix credentials are required</u></b></p>
            <table style='margin: auto; border-style: dotted; border-color: green'>
                <tr>
                    <th>Username</th>
                    <td><input type='text' name='username' /></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type='password' name='password' /></td>
                    <!-- The site is ready to be used but change the admin password -->
                    <!-- Current password: 123456 -->
                </tr>
            </table>
            <p>
                <select style='text-align: center; width: 7%' name='priv'>
                    <option selected>--Privilegs--</option>
                    <option value='admin'>admin</option>
                    <option value='user'>user</option>
                </select>
            </p>
            <p><input type='submit' name='submit' value='Login to the matrix' /></p>
        </form>
        <br><br><br>
        <?php
        if (isset($_POST['submit'])) {

            # include the config file
            include('includes/config.php');

            /*
             * check for sqlmap's user_agent
             * can be bypassed with --random-agent
             */
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            if (preg_match('/sqlmap/i', $user_agent)) {
                exit('WAF: sqlmap payload detected');
            }

            /*
             * vulnerable function that can be bypassed
             * the return value should be wrapped by:
             * mysql_real_escape_string function
             * it can be beaten by surrounding the sql
             * statements by comments
             */
            function clean($priv) {
                //$priv = preg_replace('/[\s]+/', '', $priv);
                if(preg_match('/(and|or)/i', $priv)){
                    exit('ATTACK');
                }
                if(get_magic_quotes_gpc()) {
                    $priv = stripslashes($priv);
                }
                return $priv;
            }

            $username = mysql_real_escape_string($_POST['username']);
            $password = mysql_real_escape_string(md5($_POST['password']));
            $priv = clean($_POST['priv']);         // Vulnerable parameter

            $sql = "SELECT * FROM admins WHERE username='$username' and password='$password' and priv='$priv'";
            $login = mysql_query($sql) or die (mysql_error());

            /*
            * commenting the following 'if statement' will lead to a pain in 
            * the ass exploit for some ppl as it'll be only valid as
            * an error-based one due to mysq_error() function.
            * currently the code is vulnerable to union-query/error-based injection.
            * a7a ana bdeen fsh5 :D
            */
            if (mysql_num_rows($login) == 1) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['priv'] = $_POST['priv'];
                $i = 0;
                while ($i < mysql_numrows($login)) {
                    $_SESSION['first_name'] = mysql_result($login, $i, 'first_name');
                    $_SESSION['last_name'] = mysql_result($login, $i, 'last_name');
                    $_SESSION['age'] = mysql_result($login, $i, 'age');
                    $_SESSION['email'] = mysql_result($login, $i, 'email');
                    $i++;
                }
                header('Location: search.php');
            }
            else {
                header('Location: index.php');
            }
        }
        ?>
        <small><a href='http://synapse-labs.com'>Synapse-labs</a></small>
    </body>
</html>
