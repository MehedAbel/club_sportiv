<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="departments.css">
    <title>Sectii</title>
</head>
<body>
    <div class="container">
        <?php include '../../includes/nav.php' ?>
        <div class="container__content">
            <h1>Sectii</h1>
            <div class="container__content__departments">
                <?php include '../../scripts/get_departments.php' ?>
            </div>
        </div>
    </div>
</body>
</html>