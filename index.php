<?php
$title = "AlgomaU";
require_once 'includes/header.php';
?>

<style>
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.image-container {
    width: 100%;
    height: calc(100vh - 50px); 
    margin-top: 50px; 
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover; 
}
</style>

<div class="image-container">
    <img src="image.jpg" alt="Description of the image">
</div>
<?php include 'includes/footer.php'; ?>