<?php
session_start(); // Start the Session

require_once 'includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT email, password FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $dbemail, $dbpassword);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($dbpassword && password_verify($password, $dbpassword)) {
        // Password is correct, set session variables
        $_SESSION['email'] = $dbemail;

        // Redirect to the answers
        header("Location: actualsolutions.php");
        exit(); //stops after redirection
    } else {
        echo "Bad password";
    }
}
?>