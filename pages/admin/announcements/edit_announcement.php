<?php
    include "../../../scripts/get_admin_announcement_data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="./edit_announcement.css">
    <script src="edit_announcement.js" defer></script>
    <title>Editeaza Anunt</title>
</head>
<body>
    <div class="container">
        <?php include '../../../includes/nav.php' ?>
        <div class="container__content">
            <h1>Editeaza Anunt</h1>
            <div class="container__content__admin_edit_announcement">
                <form action="" method="POST" class="container__content__admin_edit_announcement__form">
                    <div class="container__content__admin_edit_announcement__form__field">
                        <label for="title">Titlu</label>
                        <input type="text" name="title" id="title" class="container__content__admin_edit_announcement__form__field__input_title" value="<?php echo htmlspecialchars($title); ?>">
                    </div>
                    <div class="container__content__admin_edit_announcement__form__field">
                        <label for="description">Descriere</label>
                        <textarea name="description" id="description" class="container__content__admin_edit_announcement__form__field__description"><?php echo htmlspecialchars($description) ?>></textarea>
                    </div>
                    <button class="container__content__admin_edit_announcement__form__btn" type="submit">Editeaza Anunt</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>