<?php 
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

$title = "AlgomaU";
require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="text-align: center; margin-top: 20%;">
        <h1>You are Logged Out</h1>
        <a href="./loginform.php" class="btn btn-primary">Login again</a>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>
