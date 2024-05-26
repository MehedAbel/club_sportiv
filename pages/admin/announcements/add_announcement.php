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
    <link rel="stylesheet" href="./add_announcement.css">
    <script src="add_announcement.js" defer></script>
    <title>Adauga Anunt</title>
</head>
<body>
    <div class="container">
        <?php include '../../../includes/nav.php' ?>
        <div class="container__content">
            <h1>Adauga Anunt</h1>
            <div class="container__content__admin_add_announcement">
                <form action="" method="POST" class="container__content__admin_add_announcement__form">
                    <div class="container__content__admin_add_announcement__form__field">
                        <label for="title">Titlu</label>
                        <input type="text" name="title" id="title" class="container__content__admin_add_announcement__form__field__input_title">
                    </div>
                    <div class="container__content__admin_add_announcement__form__field">
                        <label for="description">Descriere</label>
                        <textarea name="description" id="description" class="container__content__admin_add_announcement__form__field__description"></textarea>
                    </div>
                    <button class="container__content__admin_add_announcement__form__btn" type="submit">Adauga Anunt</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>