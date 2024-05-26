<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="announcements.css">
    <script src="announcements.js" defer></script>
    <title>Administrare Anunturi</title>
</head>
<body>
    <div class="container">
        <?php include '../../../includes/nav.php' ?>
        <div class="container__content">
            <h1>Administrare Anunturi</h1>
            <div class="container__content__admin_announcements">
                <a href="add_announcement.php"><button class="container__content__admin_announcements__add_btn">Adauga Anunt</button></a>
                <?php include '../../../scripts/get_admin_announcements.php' ?>
            </div>
        </div>
    </div>
</body>
</html>