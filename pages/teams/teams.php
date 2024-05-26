<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="teams.css">
    <title>Echipe</title>
</head>
<body>
<div class="container">
        <?php include '../../includes/nav.php' ?>   
        <div class="container__content">
            <h1>Echipe</h1>
            <div class="container__content__teams">
                <?php include '../../scripts/get_teams.php' ?>
            </div>
        </div>
    </div>
</body>
</html>