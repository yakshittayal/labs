<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css"/>
    <link rel="stylesheet" href="./css/styles.css"/>
    <link rel="stylesheet" href="./css/bootstrap.css"/>
    <link rel="icon" href="logo.png" type="image/png">
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
        <div class="container">
            <p class="logo"><a href="./index.php">Algoma University</a></p>
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./solutions.php">Lab Solutions</a>
                        </li>
                    </ul>
                    <div class="d-flex auth-buttons">
                        <a class="btn btn-primary me-2" href="./signup.php" role="button">Sign Up</a>
                        <a class="btn btn-primary me-2" href="./loginform.php" role="button">Login</a>
                        <a class="btn btn-primary" href="./logout.php" role="button">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <script src="./js/bootstrap.bundle.js"></script>
</body>
</html>