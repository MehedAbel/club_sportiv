<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="gallery.css">
    <title>Galerie</title>
</head>
<body>
<div class="container">
        <?php include '../../includes/nav.php' ?>   
        <div class="container__content">
            <h1>Galerie</h1>
            <div class="container__content__gallery">
                <?php include '../../scripts/get_gallery.php' ?>
            </div>
        </div>
    </div>
</body>
</html>