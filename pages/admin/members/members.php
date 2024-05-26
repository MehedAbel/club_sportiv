<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="members.css">
    <script src="members.js" defer></script>
    <title>Administrare Membri</title>
</head>
<body>
    <div class="container">
        <?php include '../../../includes/nav.php' ?>
        <div class="container__content">
            <h1>Administrare Membri</h1>
            <div class="container__content__admin_members">
                <a href="add_member.php"><button class="container__content__admin_members__add_btn">Adauga Membru</button></a>
                <?php include '../../../scripts/get_admin_members.php' ?>
            </div>
        </div>
    </div>
</body>
</html>