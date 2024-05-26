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
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="./add_member.css">
    <script src="add_member.js" defer></script>
    <title>Adauga Membru</title>
</head>
<body>
    <div class="container">
        <?php include '../../../includes/nav.php'; ?>
        <div class="container__content">
            <h1>Adauga Membru</h1>
            <div class="container__content__admin_add_member">
                <form action="" method="POST" class="container__content__admin_add_member__form">
                    <div class="container__content__admin_add_member__form__field">
                        <label for="name">Nume</label>
                        <input type="text" name="name" id="name" class="container__content__admin_add_member__form__field__input_name">
                    </div>
                    <div class="container__content__admin_add_member__form__field">
                        <label for="team">Echipa</label>
                        <select name="team" id="team" class="container__content__admin_add_member__form__field__input_team">
                            <?php include '../../../scripts/get_admin_teams_options.php';?>
                        </select>
                    </div>
                    <button class="container__content__admin_add_member__form__btn" type="submit">Adauga Membru</button>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>