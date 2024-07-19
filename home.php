<?php
session_start();
$title = "AlgomaU";
require_once 'includes/header.php';
?>
<body>
    <?php if (!isset($_SESSION['email'])): ?>
        <div style="text-align: center; margin-top: 20%; font-family: Arial, sans-serif;">
            <h1 style="color: #e74c3c; font-size: 2.5em;">Please login to access the content here</h1>
            <p style="color: #2ecc71; font-size: 1.5em;">Redirecting to login page...</p>
        </div>
        <script>
            setTimeout(function(){
                window.location.href = 'loginform.php';
            }, 1000); 
        </script>
    <?php else: ?>
        <div style="text-align: center; margin-top: 20%; font-family: Arial, sans-serif;">
            <h1 style="color: #3498db; font-size: 2.5em;">Welcome to Algoma University</h1>
            <p style="color: #2ecc71; font-size: 1.5em;">School of Computer Science</p>
            <?php
                echo "<p style='color: #e74c3c; font-size: 1.2em;'>" . date("l, F j, Y") . "</p>";
            ?>
        </div>
    <?php endif; ?>
</body>
<?php include 'includes/footer.php';?>

