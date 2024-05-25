<?php
    include realpath(dirname(__FILE__) . '/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="index.css">
    <title>Home Page</title>
</head>
<body>
    <div class="container">
        <?php 
            include './includes/nav.php'; 
        ?>

        <div class="container__content">
            <h1>Welcome Home</h1>
        </div>
    </div>
</body>
</html>
