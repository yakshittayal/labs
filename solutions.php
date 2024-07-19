<?php
session_start();
$title = "AlgomaU";
require_once 'includes/header.php'; 
if (isset($_SESSION['email'])) {
    
    header("Location: viewsolutions.php");
    exit();
}
?>
<body>
    <div style="text-align: center; margin-top: 10%; font-family: Arial, sans-serif;">
        <h1 style="color: #3498db; font-size: 2.5em;">Solutions of the Lab</h1>
    </div>
    <div style="text-align: center; margin-top: 20px;">
        <button type="button" class="btn btn-outline-primary" onclick="window.location.href='loginform.php';" style="margin: 5px;">Login</button>
        <button type="button" class="btn btn-outline-secondary" onclick="window.location.href='signup.php';" style="margin: 5px;">Sign Up</button>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
