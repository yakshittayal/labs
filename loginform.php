<?php
$title = "AlgomaU";
require_once 'includes/header.php';
?>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="login.php" class="row g-3"> <!-- Set action to login.php -->
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label"><h4>Email</h4></label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword" class="form-label"><h4>Password</h4></label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div> 
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.js"></script>
</body> 
<?php include 'includes/footer.php'; ?>