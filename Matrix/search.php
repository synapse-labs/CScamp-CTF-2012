<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
$full_name = $_SESSION['first_name'].' '.$_SESSION['last_name'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Page</title>
    </head>
    <body style='text-align: center; background-color: black; color: gray;'>
        <img src='images/matrix2.jpg' width="50%" height="200" />
        <p style='color: green; '>
        I know why you're here, Neo.<br>
        I know what you've been doing... <br>
        Why you hardly sleep, why you live alone,<br>
        and why night after night, you sit by your computer.<br>
        You're looking for him.<br>
        I know because I was once looking for the same thing.<br>
        And when he found me, he told me I wasn't really looking for him.<br>
        I was looking for an answer.<br>
        It's the question that drives us, Neo.<br>
        It's the question that brought you here.<br>
        You know the question, just as I did.
        </p><br>
        <p>Search the matrix through the id e.g. 4</p>
        <form action='' method='GET'>
            <input type='text' name='q' /><br>
            <input type='submit' name='submit' value='Search The Matrix' />
        </form>
<?php
if (isset($_GET['submit'])) {
    include('includes/config.php');
    $id = $_GET['q'];
    function clean($id) {
        if(preg_match('/\s/', $id)){
            exit('ATTACK');
        }
        if(get_magic_quotes_gpc()) {
            $id = stripslashes($id);
        }
        return $id;
    }
    $id = clean($id);
    $sql = "SELECT ID, first_name, last_name, email, number, username, password FROM users WHERE id='$id'";
    $search = mysql_query($sql);
    $i = 0;
    while ($i < mysql_numrows($search)) {
        $id = mysql_result($search, $i, 'ID');
        $first_name = mysql_result($search, $i, 'first_name');
        $last_name = mysql_result($search, $i, 'last_name');
        $email = mysql_result($search, $i, 'email');
        $cell_number = mysql_result($search, $i, 'number');
        $uname = mysql_result($search, $i, 'username');
        $password = mysql_result($search, $i, 'password');
        echo "<br>
        <table style='margin: auto; width: 70%; height: 9%; text-align: center;'>
            <tr>
                <th>ID</th>
                <th>First-Name</th>
                <th>Last-Name</th>
                <th>Email</th>
                <th>Cell-Number</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <tr>
                <td>$id</td>
                <td>$first_name</td>
                <td>$last_name</td>
                <td>$email</td>
                <td>$cell_number</td>
                <td>$uname</td>
                <td>$password</td>
            </tr>
        </table>";
        $i++;
    }
}
?>
    <p><a href="logout.php">Logout</a></p>
    <p style='color: black;'> <?php echo $_SESSION['username']; ?></p>
    </body>
</html>
