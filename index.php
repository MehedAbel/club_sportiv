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
    <title>Acasa</title>
</head>
<body>
    <div class="container">
        <?php 
            include './includes/nav.php'; 
        ?>

        <div class="container__content">
            <h1>Acasa</h1>
            <div class="container__content__home">
                <p>Bine ati venit pe pagina clubului sportiv!</p>
                <p>Aici puteti gasi informatii despre clubul nostru, membrii, anunturi si multe altele.</p>
            </div>
        </div>
    </div>
</body>
</html>
