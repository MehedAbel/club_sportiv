<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['loggedin'])) {
    header('Location: /club_sportiv/login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <?php include '../../includes/nav.php' ?>
        <div class="container__content">
            <h1>Pagina Admin</h1>
            <div class="container__content__admin">
                <p><a href="/club_sportiv/pages/admin/announcements/announcements.php">Adauga / Editeaza / Sterge Anunturi</a></p>
                <p><a href="/club_sportiv/pages/admin/members/members.php">Adauga / Editeaza / Sterge Membri</a></p>
            </div>
        </div>
    </div>
</body>
</html>